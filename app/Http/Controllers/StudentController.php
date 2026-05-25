<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentCategory;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display listing (optional)
     */
    public function index()
    {
        return view('students');
    }

    /**
     * Show by category
     */
    public function category(StudentCategory $category)
    {
        $students = $category->students()
            ->latest()
            ->paginate(10);

        return view('admin.students', compact('students', 'category'));
    }

    /**
     * Store new student
     */
    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();

        // upload image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('students', 'public');
        }

        Student::create($data);

        return redirect()->back()->with('success', 'Student berhasil ditambahkan.');
    }

    /**
     * Update student
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data = $request->validated();

        // update image jika ada file baru
        if ($request->hasFile('image')) {

            // hapus image lama
            if ($student->image && Storage::disk('public')->exists($student->image)) {
                Storage::disk('public')->delete($student->image);
            }

            $data['image'] = $request->file('image')->store('students', 'public');
        }

        $student->update($data);

        return redirect()->back()->with('success', 'Student berhasil diupdate.');
    }

    /**
     * Delete student
     */
    public function destroy(Student $student)
    {
        // hapus image
        if ($student->image && Storage::disk('public')->exists($student->image)) {
            Storage::disk('public')->delete($student->image);
        }

        $student->delete();

        return redirect()->back()->with('success', 'Student berhasil dihapus.');
    }
}
