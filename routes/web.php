<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminProgramController;
use App\Http\Controllers\Admin\AdminProgramModuleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgramModuleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/join-alliance', [HomeController::class, 'contact_form'])->name('join.alliance');
Route::view('/about', 'about')->name('about');

Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{program:slug}/modules', [ProgramController::class, 'modules'])->name('programs.modules.index');
Route::get('/programs/{program:slug}/modules/{module:slug}', [ProgramModuleController::class, 'show'])->name('programs.modules.show');
Route::get('/programs/{program:slug}', [ProgramController::class, 'show'])->name('programs.show');

Route::middleware('guest')->group(function (): void {
    Route::get('/admin/login', [AdminAuthController::class, 'create'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'store'])->name('admin.login.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function (): void {
    Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');

    Route::get('/programs', [AdminProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [AdminProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs', [AdminProgramController::class, 'store'])->name('programs.store');
    Route::get('/programs/{program:slug}/edit', [AdminProgramController::class, 'edit'])->name('programs.edit');
    Route::put('/programs/{program:slug}', [AdminProgramController::class, 'update'])->name('programs.update');
    Route::delete('/programs/{program:slug}', [AdminProgramController::class, 'destroy'])->name('programs.destroy');

    Route::get('/programs/{program:slug}/modules', [AdminProgramModuleController::class, 'index'])->name('programs.modules.index');
    Route::get('/programs/{program:slug}/modules/create', [AdminProgramModuleController::class, 'create'])->name('programs.modules.create');
    Route::post('/programs/{program:slug}/modules', [AdminProgramModuleController::class, 'store'])->name('programs.modules.store');
    Route::get('/programs/{program:slug}/modules/{module:slug}/edit', [AdminProgramModuleController::class, 'edit'])->name('programs.modules.edit');
    Route::put('/programs/{program:slug}/modules/{module:slug}', [AdminProgramModuleController::class, 'update'])->name('programs.modules.update');
    Route::delete('/programs/{program:slug}/modules/{module:slug}', [AdminProgramModuleController::class, 'destroy'])->name('programs.modules.destroy');
});
