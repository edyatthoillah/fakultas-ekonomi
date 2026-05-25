<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';

Route::get('/fasilitas/{slug}',[LandingPageController::class, 'facilityCategory']
    )->name('facility.category');

Route::get('/content/{slug}',[LandingPageController::class, 'contentCategory']
    )->name('content.category');

Route::get('/information/{slug}',[LandingPageController::class, 'informationCategory']
    )->name('information.category');

Route::get('/students/{slug}', [LandingPageController::class, 'studentCategory'])
    ->name('students.category');

Route::get('/tenaga-pengajar', function () {
    return view('tutor');
})->name('tutor');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
