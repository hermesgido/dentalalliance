<?php

namespace App\Models;

use App\Models\Concerns\RendersRichContent;
use DateInterval;
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
        'delivery_mode',
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

    public function getDeliveryModeLabelAttribute(): string
    {
        return $this->delivery_mode === 'online' ? 'Online' : 'In person';
    }

    public function getTimingStatusLabelAttribute(): string
    {
        if (! $this->start_at) {
            return 'Schedule pending';
        }

        if (($this->end_at && $this->end_at->isPast()) || (! $this->end_at && $this->start_at->isPast())) {
            return 'Completed';
        }

        if ($this->start_at->isFuture()) {
            return 'Starts in '.$this->humanizeInterval(now()->diff($this->start_at));
        }

        return 'Ongoing now';
    }

    public function getTimingStatusClassAttribute(): string
    {
        if ($this->timing_status_label === 'Completed') {
            return 'is-completed';
        }

        if ($this->timing_status_label === 'Ongoing now') {
            return 'is-live';
        }

        if ($this->timing_status_label === 'Schedule pending') {
            return 'is-muted';
        }

        return 'is-upcoming';
    }

    private function humanizeInterval(DateInterval $interval): string
    {
        if ($interval->y > 0) {
            return $interval->y.' year'.($interval->y > 1 ? 's' : '');
        }

        if ($interval->m > 0) {
            return $interval->m.' month'.($interval->m > 1 ? 's' : '');
        }

        if ($interval->days >= 7) {
            $weeks = (int) ceil($interval->days / 7);

            return $weeks.' week'.($weeks > 1 ? 's' : '');
        }

        if ($interval->d > 0) {
            return $interval->d.' day'.($interval->d > 1 ? 's' : '');
        }

        if ($interval->h > 0) {
            return $interval->h.' hour'.($interval->h > 1 ? 's' : '');
        }

        $minutes = max($interval->i, 1);

        return $minutes.' minute'.($minutes > 1 ? 's' : '');
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
