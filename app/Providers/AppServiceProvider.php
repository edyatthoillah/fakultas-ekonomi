<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\FacilityCategory;
use App\Models\ContentCategory;
use App\Models\Lecturer;
use App\Models\LandingPage;
use App\Models\StudentCategory;
use App\Models\InformationCategory;
use App\Models\StudyProgram;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with([
                'facilityCategories' => FacilityCategory::orderBy('name')->get(),
                'contentCategories'  => ContentCategory::orderBy('id')->get(),
                'studentCategories'  => StudentCategory::orderBy('name')->get(),
                'informationCategories'  => InformationCategory::orderBy('name')->get(),
                'studyPrograms'         => StudyProgram::orderBy('name')->get(),
                'lecturer'         => Lecturer::get(),
                'landing' => LandingPage::first()
            ]);
        });
    }
}
