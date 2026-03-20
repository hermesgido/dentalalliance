<?php

namespace App\Models;

use App\Models\Concerns\RendersRichContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    /** @use HasFactory<\Database\Factories\ProgramFactory> */
    use HasFactory;

    use RendersRichContent;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'cover_image',
        'hero_title',
        'summary',
        'description',
        'lead',
        'intro',
        'content_html',
        'participation_items',
        'registration_steps',
        'highlights_intro',
        'highlights_items',
        'start_at',
        'end_at',
        'location_name',
        'location_address',
        'map_url',
        'has_modules',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'participation_items' => 'array',
            'registration_steps' => 'array',
            'highlights_items' => 'array',
            'start_at' => 'datetime',
            'end_at' => 'datetime',
            'has_modules' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function modules(): HasMany
    {
        return $this->hasMany(ProgramModule::class)->orderBy('sort_order')->orderBy('start_at');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
