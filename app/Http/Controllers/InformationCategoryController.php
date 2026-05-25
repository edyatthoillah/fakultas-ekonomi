<?php

namespace App\Http\Controllers;

use App\Models\InformationCategory;

class InformationCategoryController extends Controller
{
    public function category($slug)
    {
        $category = InformationCategory::where('slug', $slug)
            ->firstOrFail();

        $informations = $category->informations()
            ->latest()
            ->paginate(12);

        return view('information.index', compact('category', 'informations'));
    }
}
