<?php

namespace App\Http\Requests\Concerns;

use Closure;

trait NormalizesMapUrls
{
    protected function mapUrlRules(): array
    {
        return [
            'nullable',
            'url',
            'max:2048',
            function (string $attribute, mixed $value, Closure $fail): void {
                if (! is_string($value) || $this->normalizeMapUrl($value) === null) {
                    $fail('Enter an embeddable Google Maps URL. Short maps.app.goo.gl links cannot be embedded directly. Use Share -> Embed a map, or paste a full google.com/maps link.');
                }
            },
        ];
    }

    protected function normalizeMapUrl(?string $url): ?string
    {
        $trimmedUrl = trim((string) $url);

        if ($trimmedUrl === '') {
            return null;
        }

        $parts = parse_url($trimmedUrl);

        if (! is_array($parts) || empty($parts['host'])) {
            return null;
        }

        $host = strtolower((string) $parts['host']);
        $path = (string) ($parts['path'] ?? '');
        $query = [];

        parse_str((string) ($parts['query'] ?? ''), $query);

        if ($host === 'maps.app.goo.gl') {
            return null;
        }

        if (in_array($host, ['maps.google.com', 'www.google.com', 'google.com'], true)) {
            if (str_starts_with($path, '/maps/embed') || array_key_exists('output', $query) && $query['output'] === 'embed') {
                return $trimmedUrl;
            }

            if (! empty($query['cid'])) {
                return 'https://maps.google.com/maps?cid='.rawurlencode((string) $query['cid']).'&output=embed';
            }

            $searchTerm = $query['q'] ?? $query['query'] ?? $query['destination'] ?? null;

            if (is_string($searchTerm) && trim($searchTerm) !== '') {
                return 'https://maps.google.com/maps?q='.rawurlencode(trim($searchTerm)).'&output=embed';
            }

            foreach (['/maps/place/', '/place/', '/maps/search/', '/search/'] as $prefix) {
                if (str_starts_with($path, $prefix)) {
                    $remainder = substr($path, strlen($prefix));
                    $location = urldecode((string) strtok($remainder, '/'));

                    if (trim($location) !== '') {
                        return 'https://maps.google.com/maps?q='.rawurlencode(trim($location)).'&output=embed';
                    }
                }
            }
        }

        return null;
    }
}
