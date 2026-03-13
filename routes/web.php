<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');

// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/join-alliance', [HomeController::class, 'contact_form'])->name('join.alliance');
Route::view('/about', 'about')->name('about');
Route::view('/programs', 'programs')->name('programs.index');
Route::get('/programs/{slug}', function (string $slug) {
    $programs = [
        'digital-dentistry-workflow' => 'Digital Dentistry Workflow',
        'implant-surgery-prosthetics' => 'Implant Surgery & Prosthetics',
        'aesthetic-dentistry-smile-design' => 'Aesthetic Dentistry & Smile Design',
        'lab-clinic-integration-programs' => 'Lab-Clinic Integration Programs',
        'dental-economics' => 'Dental Economics',
        'da4ea-summits' => 'Annual or Biannual DA4EA Summits',
        'industry-academic-clinical-convergence' => 'Industry-Academic-Clinical Convergence',
        'universities-training' => 'Universities Training',
        'hospitals-training' => 'Hospitals Training',
        'ngos-training' => 'NGOs Training',
        'corporate-partners-training' => 'Corporate Partners Training',
    ];

    abort_unless(array_key_exists($slug, $programs), 404);

    return view('program-detail', [
        'programSlug' => $slug,
        'programTitle' => $programs[$slug],
    ]);
})->name('programs.show');
