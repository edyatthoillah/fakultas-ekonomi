<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentCategory;

class ContentCategoryController extends Controller
{
    public function category($slug)
    {
        $category = ContentCategory::where('slug', $slug)
            ->firstOrFail();

        $contents = Content::where('content_category_id', $category->id)
            ->latest()
            ->paginate(12);

        return view('content.index', compact('category', 'contents'));
    }
}
