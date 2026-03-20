<?php

namespace App\Models\Concerns;

trait RendersRichContent
{
    public function getRenderedContentHtmlAttribute(): ?string
    {
        if (! is_string($this->content_html) || trim($this->content_html) === '') {
            return $this->content_html;
        }

        return $this->replaceYouTubeLinks($this->content_html);
    }

    private function replaceYouTubeLinks(string $html): string
    {
        $patterns = [
            '/<p>\s*<a[^>]+href="([^"]+)"[^>]*>.*?<\/a>\s*<\/p>/i',
            '/<p>\s*(https?:\/\/[^\s<]+)\s*<\/p>/i',
            '/<video[^>]+(?:src|data-url)="([^"]+)"[^>]*>\s*<\/video>/i',
        ];

        foreach ($patterns as $pattern) {
            $html = preg_replace_callback($pattern, function (array $matches): string {
                $embedUrl = $this->youtubeEmbedUrl($matches[1] ?? null);

                if ($embedUrl === null) {
                    return $matches[0];
                }

                return '<div class="program-rich-video"><iframe src="'.$embedUrl.'" title="YouTube video" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
            }, $html) ?? $html;
        }

        return $html;
    }

    private function youtubeEmbedUrl(?string $url): ?string
    {
        if (! is_string($url) || trim($url) === '') {
            return null;
        }

        $trimmedUrl = trim(html_entity_decode($url, ENT_QUOTES));
        $parts = parse_url($trimmedUrl);

        if (! is_array($parts) || empty($parts['host'])) {
            return null;
        }

        $host = strtolower((string) $parts['host']);
        $path = trim((string) ($parts['path'] ?? ''), '/');
        $query = [];

        parse_str((string) ($parts['query'] ?? ''), $query);

        $videoId = null;

        if (in_array($host, ['youtu.be', 'www.youtu.be'], true)) {
            $videoId = strtok($path, '/');
        }

        if (in_array($host, ['youtube.com', 'www.youtube.com', 'm.youtube.com'], true)) {
            if (($query['v'] ?? null) !== null) {
                $videoId = (string) $query['v'];
            } elseif (str_starts_with($path, 'embed/')) {
                $videoId = strtok(substr($path, 6), '/');
            } elseif (str_starts_with($path, 'shorts/')) {
                $videoId = strtok(substr($path, 7), '/');
            }
        }

        if (! is_string($videoId) || ! preg_match('/^[A-Za-z0-9_-]{11}$/', $videoId)) {
            return null;
        }

        return 'https://www.youtube.com/embed/'.$videoId;
    }
}
