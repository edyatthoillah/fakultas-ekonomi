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
        'document_name' => 'required|string|max:255',
        'document_link' => 'required|string|max:255',
        'status' => 'nullable|in:active,inactive',
    ]);

    // default status jika tidak dikirim
    $validated['status'] = $request->status ?? 'active';

    Lecturer::create($validated);

    return redirect()
        ->back()
        ->with('success', 'Data berhasil ditambahkan.');
}


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Lecturer $lecturer)
{
    $validated = $request->validate([
        'document_name' => 'required|string|max:255',
        'document_link' => 'required|string|max:255',
        'status' => 'nullable|in:active,inactive',
    ]);

    // default status jika tidak dikirim
    $validated['status'] = $request->status ?? 'active';

    $lecturer->update($validated);

    return redirect()
        ->back()
        ->with('success', 'Data berhasil diperbarui.');
}


    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        if ($lecturer->status !== 'active') {
            abort(404);
        }

        return redirect($lecturer->document_link);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        return view('lecturers.edit', compact('lecturer'));
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
