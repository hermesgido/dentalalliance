<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\ProgramModule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->updateOrCreate([
            'email' => 'admin@da4ea.com',
        ], [
            'name' => 'DA4EA Admin',
            'password' => 'password',
            'is_admin' => true,
        ]);

        $digitalDentistry = Program::query()->updateOrCreate(
            ['slug' => 'digital-dentistry-workflow'],
            [
                'title' => 'Digital Dentistry Workflow',
                'category' => 'advanced-clinical-training',
                'cover_image' => 'assets/photos/top.webp',
                'hero_title' => 'Fixed Prosthesis - Digital Workflow Office/Lab Integration',
                'summary' => 'Specialized digital workflow training for clinicians and labs.',
                'description' => 'A focused digital dentistry program covering optical impressions, fixed prosthodontics, full dentures, implant planning, and smile design.',
                'lead' => 'A 3-day intensive clinical and laboratory workflow training with limited attendance to preserve hands-on quality.',
                'intro' => 'This program is designed for clinicians and laboratories ready to work with more precision, better scanning strategy, and stronger lab-clinic integration.',
                'content_html' => '<h2>Technical competence for modern restorative teams</h2><p>This program is built for clinicians and laboratories that want a sharper digital workflow, cleaner communication, and more predictable restorative outcomes across single units, full arch, and implant cases.</p><p><a href="/contact?source_page=program-detail&amp;source_section=rich-content&amp;source_button=Discuss%20Enrollment&amp;source_program_slug=digital-dentistry-workflow&amp;source_program_title=Digital%20Dentistry%20Workflow" class="program-rich-button">Discuss Enrollment</a></p><h3>What the training covers</h3><ul><li>Optical impression principles and scanning strategy</li><li>Fixed prosthodontics, partial dentures, and smile design</li><li>Implant planning logic and surgical guide readiness</li><li>Office and laboratory integration for better case execution</li></ul><p><img src="/assets/photos/digimage.jpeg" alt="Digital implant workflow"></p><h3>Who it is for</h3><p>Dentists, specialists, treatment planners, laboratory teams, and clinics building stronger digital systems.</p>',
                'participation_items' => [
                    'Early-Bird Fee (limited spots and deadline-whichever first): TZS 730,000',
                    'Regular fee - TZS 850,000 applies after the early-bird deadline or limit reached',
                    'Dental Alliance is a Tanzanian CPD provider. You will earn CE credits via this course.',
                    'Dental Therapists and assistants can attend the hands-on day for TZS 150,000.',
                ],
                'registration_steps' => [
                    'To complete your payment use the Selcom Till/link below.',
                    'When done, send your payment confirmation via WhatsApp or email.',
                    'If you are in TZ and wish to pay with credit card, you can come by our office in Masaki.',
                    'International attendees pay 300 USD and receive transfer instructions.',
                ],
                'highlights_intro' => 'The program combines theory, chairside application, and modern lab integration for predictable restorative workflows.',
                'highlights_items' => [
                    'Basic principle for optical impression',
                    'Super powers of digital dentistry',
                    'Fixed prosthodontics and partial dentures',
                    'Hands-on training: intra-oral scanning',
                    'Full denture clinical and lab protocols',
                    'Implantology treatment plan and surgical guides',
                    'Scan strategies on single and multiple implant cases',
                    'Smile design',
                    'Ceramic veneers and bonding',
                    'Injected composite veneers in-office technique',
                ],
                'start_at' => now()->setDate(2026, 4, 24)->setTime(8, 30),
                'end_at' => now()->setDate(2026, 4, 26)->setTime(13, 30),
                'location_name' => 'Golden Tulip Dar Es Salaam',
                'location_address' => '67VP+9M7, 254 Toure Dr, Dar es Salaam 6300, Tanzania',
                'map_url' => 'https://maps.google.com/maps?cid=13076055871380919946&output=embed',
                'has_modules' => true,
                'is_active' => true,
                'sort_order' => 1,
            ]
        );

        ProgramModule::query()->updateOrCreate(
            [
                'program_id' => $digitalDentistry->id,
                'slug' => 'digital-dentistry-workflow',
            ],
            [
                'program_id' => $digitalDentistry->id,
                'title' => 'Digital Dentistry Workflow',
                'slug' => 'digital-dentistry-workflow',
                'cover_image' => 'assets/photos/top.webp',
                'hero_title' => 'Fixed Prosthesis - Digital Workflow Office/Lab Integration',
                'summary' => 'Specialized digital workflow training for clinicians and labs.',
                'lead' => 'A 3-day intensive clinical and laboratory workflow training with limited attendance to preserve hands-on quality.',
                'intro' => 'This module is designed for clinicians and laboratories ready to work with more precision, better scanning strategy, and stronger lab-clinic integration.',
                'content_html' => '<h2>Technical competence for modern restorative teams</h2><p>This program is built for clinicians and laboratories that want a sharper digital workflow, cleaner communication, and more predictable restorative outcomes across single units, full arch, and implant cases.</p><p><a href="/contact?source_page=program-module-detail&amp;source_section=rich-content&amp;source_button=Discuss%20Enrollment&amp;source_program_slug=digital-dentistry-workflow&amp;source_program_title=Digital%20Dentistry%20Workflow" class="program-rich-button">Discuss Enrollment</a></p><h3>What the training covers</h3><ul><li>Optical impression principles and scanning strategy</li><li>Fixed prosthodontics, partial dentures, and smile design</li><li>Implant planning logic and surgical guide readiness</li><li>Office and laboratory integration for better case execution</li></ul><p><img src="/assets/photos/digimage.jpeg" alt="Digital implant workflow"></p><h3>Who it is for</h3><p>Dentists, specialists, treatment planners, laboratory teams, and clinics building stronger digital systems.</p>',
                'participation_items' => [
                    'Early-Bird Fee (limited spots and deadline-whichever first): TZS 730,000',
                    'Regular fee - TZS 850,000 applies after the early-bird deadline or limit reached',
                    'Dental Alliance is a Tanzanian CPD provider. You will earn CE credits via this course.',
                    'Dental Therapists and assistants can attend the hands-on day for TZS 150,000.',
                ],
                'registration_steps' => [
                    'To complete your payment use the Selcom Till/link below.',
                    'When done, send your payment confirmation via WhatsApp or email.',
                    'If you are in TZ and wish to pay with credit card, you can come by our office in Masaki.',
                    'International attendees pay 300 USD and receive transfer instructions.',
                ],
                'highlights_intro' => 'The program combines theory, chairside application, and modern lab integration for predictable restorative workflows.',
                'highlights_items' => [
                    'Basic principle for optical impression',
                    'Super powers of digital dentistry',
                    'Fixed prosthodontics and partial dentures',
                    'Hands-on training: intra-oral scanning',
                    'Full denture clinical and lab protocols',
                    'Implantology treatment plan and surgical guides',
                    'Scan strategies on single and multiple implant cases',
                    'Smile design',
                    'Ceramic veneers and bonding',
                    'Injected composite veneers in-office technique',
                ],
                'status_label' => 'Open',
                'status_style' => 'rsvp',
                'start_at' => now()->setDate(2026, 4, 24)->setTime(8, 30),
                'end_at' => now()->setDate(2026, 4, 26)->setTime(13, 30),
                'location_name' => 'Golden Tulip Dar Es Salaam',
                'location_address' => '67VP+9M7, 254 Toure Dr, Dar es Salaam 6300, Tanzania',
                'map_url' => 'https://maps.google.com/maps?cid=13076055871380919946&output=embed',
                'is_active' => true,
                'sort_order' => 1,
            ]
        );

        $dentalEconomics = Program::query()->updateOrCreate(
            ['slug' => 'dental-economics'],
            [
                'title' => 'Dental Economics',
                'category' => 'advanced-clinical-training',
                'cover_image' => 'assets/photos/Copy of dollars.webp',
                'hero_title' => 'Dental Economics',
                'summary' => 'A modular leadership and clinic-growth track for dentists and clinic owners.',
                'description' => 'A multi-module Dental Economics journey focused on financial structure, pricing, treatment planning, case acceptance, and strategic clinic growth.',
                'content_html' => '<h2>Leadership, systems, and clinic growth</h2><p>Dental Economics is a modular growth track for practice owners, ambitious associates, and decision-makers who want stronger business discipline in dentistry. Each module builds another layer of leadership, pricing logic, and treatment planning confidence.</p><p><a href="/contact?source_page=program-detail&amp;source_section=rich-content&amp;source_button=Ask%20About%20Dental%20Economics&amp;source_program_slug=dental-economics&amp;source_program_title=Dental%20Economics" class="program-rich-button">Ask About Dental Economics</a></p><h3>How the journey works</h3><ul><li>Start with a focused module</li><li>Build financial and operational clarity</li><li>Apply the lessons directly inside your clinic</li><li>Progress across the leadership cycle over time</li></ul>',
                'has_modules' => true,
                'is_active' => true,
                'sort_order' => 2,
            ]
        );

        $moduleSeedData = [
            [
                'slug' => 'de-leadership-journey-module-1',
                'title' => 'DE Leadership Journey Module 1',
                'summary' => 'This event is the first of a 4 Module leadership cycle.',
                'lead' => 'This event is the first of a 4 Module leadership cycle.',
                'intro' => 'By the end of the Dental Economics 4-Module Cycle, each participant will strengthen leadership, pricing, systems, and treatment planning performance.',
                'content_html' => '<h2>Module 1 foundation</h2><p>This opening module helps participants understand why strong clinics still leak money, underprice treatment, or struggle with confident decision-making.</p><h3>What participants will work on</h3><ul><li>Procedure costing and margin awareness</li><li>Building a strategic price list</li><li>Treatment planning discipline</li><li>Leadership thinking for sustainable clinic growth</li></ul><p><a href="/contact?source_page=program-module-detail&amp;source_section=rich-content&amp;source_button=Reserve%20My%20Seat&amp;source_program_slug=de-leadership-journey-module-1&amp;source_program_title=DE%20Leadership%20Journey%20Module%201" class="program-rich-button">Reserve My Seat</a></p>',
                'participation_items' => [
                    'Early-Bird Fee (limited spots and deadline-whichever first): TZS 549,000',
                    'Regular fee - TZS 589,000 applies after the early-bird deadline or limit reached',
                    'Dental Alliance is a Tanzanian CPD provider. You will earn CE credits via this course.',
                    'Signing up for the 4 module cycle is TZS 2,000,000 before March 30th or when limit is reached.',
                ],
                'registration_steps' => [
                    'To complete your payment reach out to us via our WhatsApp community.',
                    'We will soon post Selcom instructions.',
                    'When done, send your payment confirmation via WhatsApp or email.',
                    'You will receive an official DA4EA confirmation message.',
                ],
                'highlights_intro' => 'This is a 2-day intensive Dental Economics cycle where Day 2 is focused on treatment planning and case discussion.',
                'highlights_items' => [
                    'Why most clinics underperform financially',
                    'Understanding your true costs',
                    'Procedure costing and margin analysis',
                    'Building a strategic price list',
                    'Productivity and clinic financial structure',
                    'Treatment planning and risk assessment',
                ],
                'status_label' => 'RSVP',
                'status_style' => 'rsvp',
                'is_featured' => true,
                'start_at' => now()->setDate(2026, 4, 17)->setTime(8, 30),
                'end_at' => now()->setDate(2026, 4, 18)->setTime(16, 0),
                'location_name' => 'Kwik Spaces',
                'location_address' => '1040 Haile Selassie Rd, Dar es Salaam 0255, Tanzania',
                'map_url' => 'https://maps.google.com/maps?cid=10563082615584068316&output=embed',
                'sort_order' => 1,
            ],
            [
                'slug' => 'mwanza-build-and-grow-your-dental-clinic',
                'title' => 'Mwanza - Build and grow your dental clinic',
                'summary' => 'A growth-focused leadership module for clinic owners expanding systems, team performance, and profitability.',
                'lead' => 'A field-focused leadership module designed to help clinic owners build stronger business systems and measurable growth.',
                'intro' => 'This Mwanza module focuses on practical clinic leadership for owners and decision-makers who want to scale sustainably.',
                'participation_items' => [
                    'Participation details: contact DA4EA to confirm seat availability and current pricing.',
                ],
                'registration_steps' => [
                    'Register interest through the contact form.',
                    'Our team will share attendance details and payment instructions.',
                    'Confirmation is issued once registration is completed.',
                ],
                'highlights_intro' => 'Participants will work through growth systems that support stronger clinic operations.',
                'highlights_items' => [
                    'Clinic growth planning',
                    'Operational systems and delegation',
                    'Leadership communication',
                    'Service positioning and pricing discipline',
                    'Growth roadmaps for private practice',
                ],
                'status_label' => 'Going',
                'status_style' => 'going',
                'is_featured' => false,
                'start_at' => now()->setDate(2026, 5, 13)->setTime(9, 0),
                'end_at' => now()->setDate(2026, 5, 16)->setTime(14, 0),
                'location_name' => 'Mwanza, Tanzania',
                'location_address' => 'In person event in Mwanza, Tanzania',
                'sort_order' => 2,
            ],
            [
                'slug' => 'de-leadership-journey-module-2',
                'title' => 'DE Leadership Journey Module 2',
                'summary' => 'The second module builds financial control, pricing precision, and treatment plan profitability.',
                'lead' => 'Module 2 continues the Dental Economics leadership cycle with a deeper focus on strategic pricing and financial control.',
                'intro' => 'Participants will build on Module 1 by improving financial decision-making and treatment plan profitability.',
                'participation_items' => [
                    'Participation details: reach out to DA4EA for registration and pricing updates.',
                ],
                'registration_steps' => [
                    'Register your interest online.',
                    'Receive payment instructions from the DA4EA team.',
                    'Confirm your place once payment is received.',
                ],
                'highlights_intro' => 'This module sharpens pricing and profitability systems for real-world clinical settings.',
                'highlights_items' => [
                    'Pricing confidence',
                    'Margin protection',
                    'Treatment plan profitability',
                    'Clinic performance measurement',
                    'Strategic financial leadership',
                ],
                'status_label' => 'RSVP',
                'status_style' => 'rsvp',
                'is_featured' => false,
                'start_at' => now()->setDate(2026, 7, 17)->setTime(8, 30),
                'end_at' => now()->setDate(2026, 7, 18)->setTime(16, 0),
                'location_name' => 'Dar es Salaam, Tanzania',
                'location_address' => 'In person event in Dar es Salaam, Tanzania',
                'sort_order' => 3,
            ],
            [
                'slug' => 'de-leadership-journey-module-3',
                'title' => 'DE Leadership Journey Module 3',
                'summary' => 'An advanced module focused on leadership decision-making, case acceptance, and sustainable clinic growth.',
                'lead' => 'Module 3 focuses on leadership maturity, stronger case acceptance, and long-term clinic sustainability.',
                'intro' => 'This stage of the cycle supports clinic owners who want better decisions, stronger teams, and higher-value patient journeys.',
                'participation_items' => [
                    'Participation details: reach out to DA4EA for current registration guidance.',
                ],
                'registration_steps' => [
                    'Submit interest via the website.',
                    'Wait for DA4EA confirmation and logistics details.',
                    'Secure your attendance once payment is confirmed.',
                ],
                'highlights_intro' => 'The module connects leadership systems with stronger treatment acceptance and sustainable growth.',
                'highlights_items' => [
                    'Leadership communication systems',
                    'Case acceptance improvement',
                    'Team accountability',
                    'Long-term growth planning',
                    'Sustainable clinic leadership',
                ],
                'status_label' => 'Going',
                'status_style' => 'going',
                'is_featured' => false,
                'start_at' => now()->setDate(2026, 9, 11)->setTime(18, 0),
                'end_at' => now()->setDate(2026, 9, 12)->setTime(16, 0),
                'location_name' => 'Dar es Salaam, Tanzania',
                'location_address' => 'In person event in Dar es Salaam, Tanzania',
                'sort_order' => 4,
            ],
        ];

        foreach ($moduleSeedData as $moduleSeed) {
            ProgramModule::query()->updateOrCreate(
                [
                    'program_id' => $dentalEconomics->id,
                    'slug' => $moduleSeed['slug'],
                ],
                array_merge($moduleSeed, [
                    'program_id' => $dentalEconomics->id,
                    'cover_image' => 'assets/photos/Copy of dollars.webp',
                    'hero_title' => $moduleSeed['title'],
                    'is_active' => true,
                ])
            );
        }
    }
}
