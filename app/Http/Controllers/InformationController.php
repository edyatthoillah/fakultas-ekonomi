<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\InformationCategory;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;

class InformationController extends Controller
{
    /**
     * Display listing (optional)
     */
    public function index()
    {
        return view('information');
    }

    /**
     * Show by category
     */
    public function category(InformationCategory $category)
    {
        $informations = $category->informations()
            ->latest()
            ->paginate(10);

        return view('admin.information', compact('informations', 'category'));
    }

    /**
     * Store new information
     */
    public function store(StoreInformationRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('informations', 'public');
        }

        Information::create($data);

        return redirect()->back()
            ->with('success', 'Informasi berhasil ditambahkan.');
    }

    /**
     * Update information
     */

    public function update(UpdateInformationRequest $request, Information $information)
    {
        $data = $request->validated();

        // Upload gambar baru
        if ($request->hasFile('image')) {

            // Hapus gambar lama
            if (
                $information->image &&
                Storage::disk('public')->exists($information->image)
            ) {
                Storage::disk('public')->delete($information->image);
            }

            $data['image'] = $request->file('image')
                ->store('informations', 'public');
        }

        $information->update($data);

        return redirect()
            ->back()
            ->with('success', 'Informasi berhasil diperbarui.');
    }

    /**
     * Delete information
     */
    public function destroy(Information $information)
    {
        if (
            $information->image &&
            Storage::disk('public')->exists($information->image)
        ) {
            Storage::disk('public')->delete($information->image);
        }

        $information->delete();

        return redirect()->back()
            ->with('success', 'Informasi berhasil dihapus.');
    }
}
