<?php

use App\Models\Program;
use App\Models\ProgramModule;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows the dental economics modules page', function () {
    $program = Program::query()->create([
        'title' => 'Dental Economics',
        'slug' => 'dental-economics',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'DE Leadership Journey Module 1',
        'slug' => 'de-leadership-journey-module-1',
        'is_active' => true,
    ]);

    ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'DE Leadership Journey Module 2',
        'slug' => 'de-leadership-journey-module-2',
        'is_active' => true,
    ]);

    $this->get(route('programs.modules.index', $program))
        ->assertSuccessful()
        ->assertSee('Dental Economics Modules')
        ->assertSee('DE Leadership Journey Module 1')
        ->assertSee('DE Leadership Journey Module 2');
});

it('shows featured modules first and keeps the rest grouped by month', function () {
    $program = Program::query()->create([
        'title' => 'Dental Economics',
        'slug' => 'dental-economics',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'Featured Module',
        'slug' => 'featured-module',
        'is_featured' => true,
        'is_active' => true,
        'start_at' => now()->setDate(2026, 4, 17)->setTime(8, 30),
        'end_at' => now()->setDate(2026, 4, 18)->setTime(16, 0),
    ]);

    ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'Regular Module',
        'slug' => 'regular-module',
        'is_featured' => false,
        'is_active' => true,
        'start_at' => now()->setDate(2026, 5, 13)->setTime(9, 0),
        'end_at' => now()->setDate(2026, 5, 16)->setTime(14, 0),
    ]);

    $this->get(route('programs.modules.index', $program))
        ->assertSuccessful()
        ->assertSee('Featured Event')
        ->assertSee('Featured Module')
        ->assertSee('May 2026')
        ->assertSee('Regular Module');
});

it('shows a dental economics module detail page', function () {
    $program = Program::query()->create([
        'title' => 'Dental Economics',
        'slug' => 'dental-economics',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    $module = ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'DE Leadership Journey Module 1',
        'slug' => 'de-leadership-journey-module-1',
        'registration_steps' => ['Step 1'],
        'highlights_items' => ['Highlight 1'],
        'is_active' => true,
    ]);

    $this->get(route('programs.modules.show', ['program' => $program, 'module' => $module]))
        ->assertSuccessful()
        ->assertSee('DE Leadership Journey Module 1')
        ->assertSee('How to Secure Your Seat')
        ->assertSee('Module Highlights');
});

it('redirects a program page to its modules list', function () {
    $program = Program::query()->create([
        'title' => 'Digital Dentistry Workflow',
        'slug' => 'digital-dentistry-workflow',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    $this->get(route('programs.show', $program))
        ->assertRedirect(route('programs.modules.index', $program));
});
