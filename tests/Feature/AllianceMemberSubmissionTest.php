<?php

use App\Mail\AllianceMemberSubmitted;
use App\Models\AllianceMember;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

uses(RefreshDatabase::class);

it('stores the submission and sends a notification email with source data', function () {
    Mail::fake();

    $payload = [
        'full_name' => 'Hermes Gido',
        'phone' => '+255741778722',
        'email' => 'hermes@example.com',
        'country' => 'Tanzania',
        'role' => 'Dentist',
        'message' => 'Interested in the implant program.',
        'source_page' => 'program-detail',
        'source_section' => 'program-sidebar',
        'source_button' => 'Register Interest',
        'source_program_slug' => 'implant-surgery-prosthetics',
        'source_program_title' => 'Implant Surgery & Prosthetics',
        'source_url' => 'http://127.0.0.1:8000/programs/implant-surgery-prosthetics',
        'referrer_url' => 'http://127.0.0.1:8000/programs/implant-surgery-prosthetics',
    ];

    $this->postJson(route('join.alliance'), $payload)
        ->assertSuccessful()
        ->assertJson([
            'success' => true,
            'message' => 'Successfully joined the alliance!',
        ]);

    $this->assertDatabaseHas(AllianceMember::class, [
        'email' => 'hermes@example.com',
        'source_page' => 'program-detail',
        'source_section' => 'program-sidebar',
        'source_button' => 'Register Interest',
        'source_program_slug' => 'implant-surgery-prosthetics',
    ]);

    Mail::assertSent(AllianceMemberSubmitted::class, function (AllianceMemberSubmitted $mail): bool {
        return $mail->allianceMember->email === 'hermes@example.com'
            && $mail->allianceMember->source_button === 'Register Interest';
    });
});

it('keeps source details on the contact page when arriving from a program button', function () {
    $response = $this->get(route('contact', [
        'source_page' => 'program-detail',
        'source_section' => 'program-sidebar',
        'source_button' => 'Register Interest',
        'source_program_slug' => 'implant-surgery-prosthetics',
        'source_program_title' => 'Implant Surgery & Prosthetics',
        'source_url' => 'http://127.0.0.1:8000/programs/implant-surgery-prosthetics',
    ]));

    $response->assertSuccessful();
    $response->assertSee('name="source_page" value="program-detail"', false);
    $response->assertSee('name="source_button" value="Register Interest"', false);
    $response->assertSee('name="source_program_slug" value="implant-surgery-prosthetics"', false);
});

it('logs the error and returns a readable json response when mail sending fails', function () {
    Log::spy();
    Mail::shouldReceive('to->send')->once()->andThrow(new \RuntimeException('SMTP auth failed.'));

    $payload = [
        'full_name' => 'Hermes Gido',
        'phone' => '+255741778722',
        'email' => 'hermes@example.com',
        'country' => 'Tanzania',
        'role' => 'Dentist',
        'source_page' => 'contact',
        'source_section' => 'contact-form',
        'source_button' => 'Direct contact form',
        'source_url' => 'http://127.0.0.1:8000/contact',
    ];

    $this->postJson(route('join.alliance'), $payload)
        ->assertStatus(500)
        ->assertJson([
            'success' => false,
            'message' => 'Submission failed. Please check storage/logs/laravel.log for the error details.',
            'debug_message' => 'SMTP auth failed.',
        ]);

    Log::shouldHaveReceived('error')->once();
});
