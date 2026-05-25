<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;


class PartnerController extends Controller
{
    public function index()
    {
        // dd('anjazz');
        $partners = Partner::latest()->get();

        return view('admin.partner', compact('partners'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'logo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            ]);

            $logoPath = null;

            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('partners', 'public');
            }

            Partner::create([
                'name' => $request->name,
                'logo' => $logoPath,
            ]);

            return back()->with('success', 'Mitra berhasil ditambahkan');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan mitra');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $partner = Partner::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
                'logo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            ]);

            $logoPath = $partner->logo;

            if ($request->hasFile('logo')) {
                // hapus logo lama
                if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
                    Storage::disk('public')->delete($partner->logo);
                }

                $logoPath = $request->file('logo')->store('partners', 'public');
            }

            $partner->update([
                'name' => $request->name,
                'logo' => $logoPath,
            ]);

            return back()->with('success', 'Mitra berhasil diupdate');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal update mitra');
        }
    }

    public function destroy($id)
    {
        try {
            $partner = Partner::findOrFail($id);

            // hapus file logo
            if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
                Storage::disk('public')->delete($partner->logo);
            }

            $partner->delete();

            return back()->with('success', 'Mitra berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus mitra');
        }
    }
}
