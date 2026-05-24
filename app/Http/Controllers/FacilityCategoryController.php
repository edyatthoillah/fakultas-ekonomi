<?php

namespace App\Http\Controllers;

use App\Models\FacilityCategory;
use App\Http\Requests\StoreFacilityCategoryRequest;
use App\Http\Requests\UpdateFacilityCategoryRequest;

class FacilityCategoryController extends Controller
{

    public function category($slug)
    {
        $category = FacilityCategory::where(
            'slug',
            $slug
        )->firstOrFail();

        $facilities = Facility::where(
            'facility_category_id',
            $category->id
        )->latest()->paginate(12);

        return view(
            'facilities.index',
            compact('category', 'facilities')
        );
    }
}
