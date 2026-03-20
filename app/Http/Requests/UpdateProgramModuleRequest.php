<?php

namespace App\Http\Requests;

use App\Http\Requests\Concerns\NormalizesMapUrls;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProgramModuleRequest extends FormRequest
{
    use NormalizesMapUrls;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('program_modules', 'slug')
                    ->where(fn ($query) => $query->where('program_id', $this->route('program')->id))
                    ->ignore($this->route('module')->id),
            ],
            'cover_image' => 'nullable|string|max:255',
            'cover_image_upload' => 'nullable|image|max:5120',
            'hero_title' => 'nullable|string|max:255',
            'summary' => 'nullable|string|max:255',
            'lead' => 'nullable|string',
            'intro' => 'nullable|string',
            'content_html' => 'nullable|string',
            'participation_items' => 'nullable|string',
            'registration_steps' => 'nullable|string',
            'highlights_intro' => 'nullable|string',
            'highlights_items' => 'nullable|string',
            'status_label' => 'nullable|string|max:50',
            'status_style' => 'nullable|string|max:50',
            'start_at' => 'nullable|date',
            'end_at' => 'nullable|date|after_or_equal:start_at',
            'location_name' => 'nullable|string|max:255',
            'location_address' => 'nullable|string|max:255',
            'map_url' => $this->mapUrlRules(),
            'is_active' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ];
    }

    public function normalizedData(): array
    {
        return [
            'title' => $this->string('title')->toString(),
            'slug' => $this->filled('slug') ? $this->string('slug')->toString() : null,
            'cover_image' => $this->filled('cover_image') ? $this->string('cover_image')->toString() : null,
            'hero_title' => $this->filled('hero_title') ? $this->string('hero_title')->toString() : null,
            'summary' => $this->filled('summary') ? $this->string('summary')->toString() : null,
            'lead' => $this->filled('lead') ? $this->string('lead')->toString() : null,
            'intro' => $this->filled('intro') ? $this->string('intro')->toString() : null,
            'content_html' => $this->filled('content_html') ? trim((string) $this->input('content_html')) : null,
            'participation_items' => $this->lines('participation_items'),
            'registration_steps' => $this->lines('registration_steps'),
            'highlights_intro' => $this->filled('highlights_intro') ? $this->string('highlights_intro')->toString() : null,
            'highlights_items' => $this->lines('highlights_items'),
            'status_label' => $this->filled('status_label') ? $this->string('status_label')->toString() : null,
            'status_style' => $this->filled('status_style') ? $this->string('status_style')->toString() : null,
            'start_at' => $this->input('start_at') ?: null,
            'end_at' => $this->input('end_at') ?: null,
            'location_name' => $this->filled('location_name') ? $this->string('location_name')->toString() : null,
            'location_address' => $this->filled('location_address') ? $this->string('location_address')->toString() : null,
            'map_url' => $this->filled('map_url') ? $this->normalizeMapUrl($this->string('map_url')->toString()) : null,
            'is_active' => $this->boolean('is_active'),
            'is_featured' => $this->boolean('is_featured'),
            'sort_order' => (int) ($this->input('sort_order') ?: 0),
        ];
    }

    protected function lines(string $key): array
    {
        return collect(preg_split('/\r\n|\r|\n/', (string) $this->input($key, '')))
            ->map(fn (string $line): string => trim($line))
            ->filter()
            ->values()
            ->all();
    }
}
