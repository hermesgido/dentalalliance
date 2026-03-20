<?php

namespace App\Models;

use App\Models\Concerns\RendersRichContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramModule extends Model
{
    /** @use HasFactory<\Database\Factories\ProgramModuleFactory> */
    use HasFactory;

    use RendersRichContent;

    protected $fillable = [
        'program_id',
        'title',
        'slug',
        'cover_image',
        'hero_title',
        'summary',
        'lead',
        'intro',
        'content_html',
        'participation_items',
        'registration_steps',
        'highlights_intro',
        'highlights_items',
        'status_label',
        'status_style',
        'start_at',
        'end_at',
        'location_name',
        'location_address',
        'map_url',
        'is_active',
        'is_featured',
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
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ];
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
