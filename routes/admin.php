<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
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
});

