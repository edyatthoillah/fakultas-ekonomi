<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\FacilityCategory;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
         return view('facility');
    }


    public function category(FacilityCategory $category)
    {
        $facilities = $category->facilities()
            ->latest()
            ->paginate(10);

        return view(
            'admin.facility',
            compact('facilities', 'category')
        );
    }

    public function store(StoreFacilityRequest $request)
    {
        try {

            $data = $request->validated();

            // Upload gambar
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')
                    ->store('facilities', 'public');
            }

            Facility::create($data);

            return redirect()
                ->back()
                ->with('success', 'Fasilitas berhasil ditambahkan.');
        } catch (\Exception $e) {

            Log::error('Gagal menambahkan fasilitas', [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan data fasilitas.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityRequest $request, Facility $facility)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {

            if (
                $facility->image &&
                Storage::disk('public')->exists($facility->image)
            ) {
                Storage::disk('public')->delete($facility->image);
            }

            $data['image'] = $request->file('image')
                ->store('facilities', 'public');
        }

        $facility->update($data);

        return redirect()->back()
            ->with('successedit', 'Fasilitas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        // hapus file image
        if ($facility->image && Storage::disk('public')->exists($facility->image)) {
            Storage::disk('public')->delete($facility->image);
        }

        $facility->delete();

        return redirect()->back()->with('success', 'Facility berhasil dihapus.');
    }
}
