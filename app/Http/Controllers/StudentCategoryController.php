<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentCategory;

class StudentCategoryController extends Controller
{
    public function category($slug)
    {
        $category = StudentCategory::where('slug', $slug)
            ->firstOrFail();

        $students = Student::where('student_category_id', $category->id)
            ->latest()
            ->paginate(12);

        return view('students.index', compact('category', 'students'));
    }
}
