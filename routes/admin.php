<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\InformationController;

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('news', NewsController::class);
    // =====================
    // INFORMATION (Penelitian, Publikasi, dll)
    // =====================
    Route::get('/information/{category:slug}', [InformationController::class, 'category'])
        ->name('information.category');

    Route::resource('information', InformationController::class);

    Route::get('/landingpage', [LandingPageController::class, 'adminindex'])->name('landingpage.index');
    Route::post('/landingpage/update-vision-mission', [LandingPageController::class, 'updatevisionmission'])->name('landingpage.updatevisionmission');
    Route::post('/landingpage/update', [LandingPageController::class, 'update'])->name('landingpage.update');

    Route::get('/fasilitas/{category:slug}', [FacilityController::class, 'category'])
    ->name('facilities.category');

    Route::resource('facilities', FacilityController::class);


    // =====================
    // CONTENT (Penelitian, Publikasi, dll)
    // =====================
    Route::get('/content/{category:slug}', [ContentController::class, 'category'])
        ->name('content.category');

    Route::resource('content', ContentController::class);

    // =====================
    // STUDENT (HIMA, Prestasi, Kegiatan, PKL)
    // =====================
    Route::get('/students/{category:slug}', [StudentController::class, 'category'])
        ->name('students.category');

    Route::resource('students', StudentController::class);

    // =====================
    // STUDENT (HIMA, Prestasi, Kegiatan, PKL)
    // =====================
    Route::resource('partner', PartnerController::class);
});

