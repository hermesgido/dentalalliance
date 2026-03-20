<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        $programs = DB::table('programs')
            ->where('has_modules', false)
            ->get();

        foreach ($programs as $program) {
            $existingModuleCount = DB::table('program_modules')
                ->where('program_id', $program->id)
                ->count();

            if ($existingModuleCount === 0) {
                $baseSlug = Str::slug($program->slug ?: $program->title ?: 'program-module');
                $moduleSlug = $baseSlug;
                $suffix = 1;

                while (DB::table('program_modules')
                    ->where('program_id', $program->id)
                    ->where('slug', $moduleSlug)
                    ->exists()) {
                    $suffix++;
                    $moduleSlug = $baseSlug.'-'.$suffix;
                }

                DB::table('program_modules')->insert([
                    'program_id' => $program->id,
                    'title' => $program->title,
                    'slug' => $moduleSlug,
                    'cover_image' => $program->cover_image,
                    'hero_title' => $program->hero_title ?: $program->title,
                    'summary' => $program->summary,
                    'lead' => $program->lead,
                    'intro' => $program->intro,
                    'content_html' => $program->content_html,
                    'participation_items' => $program->participation_items,
                    'registration_steps' => $program->registration_steps,
                    'highlights_intro' => $program->highlights_intro,
                    'highlights_items' => $program->highlights_items,
                    'status_label' => 'Open',
                    'status_style' => 'rsvp',
                    'start_at' => $program->start_at,
                    'end_at' => $program->end_at,
                    'location_name' => $program->location_name,
                    'location_address' => $program->location_address,
                    'map_url' => $program->map_url,
                    'is_active' => $program->is_active,
                    'sort_order' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::table('programs')
                ->where('id', $program->id)
                ->update(['has_modules' => true]);
        }
    }

    public function down(): void
    {
        //
    }
};
