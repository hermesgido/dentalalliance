<?php

use App\Models\Program;
use App\Models\ProgramModule;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows an admin to save rich content on a program', function () {
    $admin = User::factory()->create([
        'is_admin' => true,
    ]);

    $this->actingAs($admin)
        ->post(route('admin.programs.store'), [
            'title' => 'Implant Systems',
            'category' => 'advanced-clinical-training',
            'content_html' => '<h2>Build a premium workflow</h2><p><a href="/contact" class="program-rich-button">Book Now</a></p>',
            'is_active' => '1',
        ])
        ->assertRedirect();

    $program = Program::query()->firstOrFail();

    expect($program->content_html)
        ->toContain('Build a premium workflow')
        ->toContain('program-rich-button');
});

it('renders rich content on a module detail page', function () {
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
        'content_html' => '<h2>Module Outcomes</h2><p>Participants sharpen pricing confidence.</p><p><a href="/contact" class="program-rich-button">Reserve</a></p>',
        'is_active' => true,
    ]);

    $this->get(route('programs.modules.show', ['program' => $program, 'module' => $module]))
        ->assertSuccessful()
        ->assertSee('Module Outcomes')
        ->assertSee('Participants sharpen pricing confidence.')
        ->assertSee('Reserve');
});

it('renders youtube links in rich content as embedded videos', function () {
    $program = Program::query()->create([
        'title' => 'Dental Economics',
        'slug' => 'dental-economics',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    $module = ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'Video Module',
        'slug' => 'video-module',
        'content_html' => '<p>https://www.youtube.com/watch?v=dQw4w9WgXcQ</p>',
        'is_active' => true,
    ]);

    $this->get(route('programs.modules.show', ['program' => $program, 'module' => $module]))
        ->assertSuccessful()
        ->assertSee('https://www.youtube.com/embed/dQw4w9WgXcQ', false);
});

it('renders blocknote youtube video blocks as embedded videos', function () {
    $program = Program::query()->create([
        'title' => 'Dental Economics',
        'slug' => 'dental-economics',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    $module = ProgramModule::query()->create([
        'program_id' => $program->id,
        'title' => 'Video Module',
        'slug' => 'video-module',
        'content_html' => '<video src="https://www.youtube.com/embed/tuE_WGSQGLU?si=D9yCTNk3zHRyEoJq" data-name="tuE_WGSQGLU?si=D9yCTNk3zHRyEoJq" data-url="https://www.youtube.com/embed/tuE_WGSQGLU?si=D9yCTNk3zHRyEoJq"></video>',
        'is_active' => true,
    ]);

    $this->get(route('programs.modules.show', ['program' => $program, 'module' => $module]))
        ->assertSuccessful()
        ->assertSee('https://www.youtube.com/embed/tuE_WGSQGLU', false)
        ->assertDontSee('<video', false);
});

it('normalizes a full google maps link into an embeddable map url when creating a program', function () {
    $admin = User::factory()->create([
        'is_admin' => true,
    ]);

    $this->actingAs($admin)
        ->post(route('admin.programs.store'), [
            'title' => 'Implant Systems',
            'category' => 'advanced-clinical-training',
            'map_url' => 'https://www.google.com/maps/place/Golden+Tulip+Dar+Es+Salaam',
            'is_active' => '1',
        ])
        ->assertRedirect();

    $program = Program::query()->latest('id')->firstOrFail();

    expect($program->map_url)
        ->toBe('https://maps.google.com/maps?q=Golden%20Tulip%20Dar%20Es%20Salaam&output=embed');
});

it('rejects non-embeddable google short links for module maps', function () {
    $admin = User::factory()->create([
        'is_admin' => true,
    ]);

    $program = Program::query()->create([
        'title' => 'Dental Economics',
        'slug' => 'dental-economics',
        'category' => 'advanced-clinical-training',
        'has_modules' => true,
        'is_active' => true,
    ]);

    $this->actingAs($admin)
        ->post(route('admin.programs.modules.store', $program), [
            'title' => 'Module 1',
            'map_url' => 'https://maps.app.goo.gl/htG5fqqiah6X2P4HA',
            'is_active' => '1',
        ])
        ->assertSessionHasErrors('map_url');
});
