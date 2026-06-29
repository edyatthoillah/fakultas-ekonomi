<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';

Route::get(
    '/contents/category/{category}/print',
    [ContentController::class, 'printPdf']
)->name('contents.print');

Route::controller(LandingPageController::class)->group(function () {

    // Home
    Route::get('/', 'index')->name('landingpage');

    /*
    |-------------------------
    | Study Program
    |-------------------------
    */
    Route::prefix('program-studi')->group(function () {
        Route::get('/{slug}', 'studyProgramShow')
            ->name('study-programs.show');
    });

    /*
    |-------------------------
    | Lecturers
    |-------------------------
    */
    Route::prefix('document')->group(function () {
        Route::get('/', 'lecturerIndex')
            ->name('lecturers.index');
    });

    Route::get('/documents/{lecturer}', [LecturerController::class, 'show'])->name('documents.show');

    /*
    |-------------------------
    | News
    |-------------------------
    */
    Route::prefix('berita')->group(function () {
        Route::get('/', 'newsIndex')
            ->name('news.frontend.index');

        Route::get('/{slug}', 'newsShow')
            ->name('news.frontend.show');
    });

    /*
    |-------------------------
    | About
    |-------------------------
    */
    Route::prefix('tentang')->group(function () {
        Route::get('/tentang-kami', 'about')
            ->name('about.fakultas-ekonomi');

        Route::get('/visi-misi', 'visionMission')
            ->name('about.visi-misi');

        Route::get('/struktur-organisasi', 'strukturOrganisasi')
            ->name('about.struktur-organisasi');
    });

    /*
    |-------------------------
    | Categories
    |-------------------------
    */
    Route::prefix('fasilitas')->group(function () {
        Route::get('/{slug}', 'facilityCategory')
            ->name('facility.category');
    });

    Route::prefix('content')->group(function () {
        Route::get('/{slug}', 'contentCategory')
            ->name('content.category');
    });

    Route::prefix('information')->group(function () {
        Route::get('/{slug}', 'informationCategory')
            ->name('information.category');
    });

    Route::prefix('students')->group(function () {
        Route::get('/{slug}', 'studentCategory')
            ->name('students.category');
    });

});

Route::get('/dashboard', function () {
    return redirect()->route('admin.landingpage.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
