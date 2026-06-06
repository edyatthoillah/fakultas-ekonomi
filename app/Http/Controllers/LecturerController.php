<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::latest()->get();

        return view('admin.lecturer', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nidn' => 'nullable|string|max:50',
            'nip' => 'nullable|string|max:50',
            'nuptk' => 'nullable|string|max:50',
            'position' => 'nullable|string|max:255',
            'study_program' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        // Upload Foto
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')
                ->store('lecturers', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        Lecturer::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Data tenaga pengajar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        return view('lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        return view('lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nidn' => 'nullable|string|max:50',
            'nip' => 'nullable|string|max:50',
            'nuptk' => 'nullable|string|max:50',
            'position' => 'nullable|string|max:255',
            'study_program' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        // Upload Foto Baru
        if ($request->hasFile('photo')) {

            // Hapus Foto Lama
            if ($lecturer->photo && Storage::disk('public')->exists($lecturer->photo)) {
                Storage::disk('public')->delete($lecturer->photo);
            }

            $validated['photo'] = $request->file('photo')
                ->store('lecturers', 'public');
        }

        $validated['is_active'] = $request->has('is_active');

        $lecturer->update($validated);

        return redirect()
            ->back()
            ->with('success', 'Data tenaga pengajar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        // Hapus Foto
        if ($lecturer->photo && Storage::disk('public')->exists($lecturer->photo)) {
            Storage::disk('public')->delete($lecturer->photo);
        }

        $lecturer->delete();

        return redirect()
            ->back()
            ->with('success', 'Data tenaga pengajar berhasil dihapus.');
    }
}
