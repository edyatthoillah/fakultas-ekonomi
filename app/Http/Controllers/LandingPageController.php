<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Http\Requests\StoreLandingPageRequest;
use App\Http\Requests\UpdateLandingPageRequest;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\FacilityCategory;
use App\Models\ContentCategory;
use App\Models\StudentCategory;

class LandingPageController extends Controller
{
    public function studentCategory($slug)
    {
        $category = StudentCategory::where('slug', $slug)
            ->firstOrFail();

        $students = $category->students()
            ->latest()
            ->get();

        return view(
            'students',
            compact('category', 'students')
        );
    }

    public function facilityCategory($slug)
    {
        $category = FacilityCategory::where(
            'slug',
            $slug
        )->firstOrFail();

        $facilities = $category->facilities()
            ->latest()
            ->get();

        return view(
            'facility',
            compact('category', 'facilities')
        );
    }

    public function contentCategory($slug)
    {
        $category = ContentCategory::where('slug', $slug)
            ->firstOrFail();

        $contents = $category->contents()
            ->latest()
            ->get();

        return view('content', compact('category', 'contents'));
    }

    public function index()
    {
        $landing = LandingPage::first();
        $partners = Partner::all();

        return view('welcome', compact(['landing', 'partners']));
    }

    public function adminindex()
    {
        $landing = LandingPage::first();

        return view('admin.landingpage', compact('landing'));
    }

    public function updatevisionmission(Request $request)
    {
        $landing = LandingPage::firstOrCreate([]);

        $request->validate([
            'vision' => 'required|string',
            'mission' => 'required|string',
        ]);

        $landing->update([
            'vision' => $request->vision,
            'mission' => $request->mission,
        ]);

        return redirect()->back()->with('success', 'Visi dan Misi berhasil diupdate');
    }

    public function update(Request $request)
    {
        $landing = LandingPage::firstOrCreate([]);

        $request->validate([
            'app_name' => 'required|string|max:255',
            'email' => 'nullable|email',
        ]);

        // Logo
        if ($request->hasFile('logo')) {
            if ($landing->logo) {
                Storage::disk('public')->delete($landing->logo);
            }
            $landing->logo = $request->file('logo')->store('landing', 'public');
        }

        // Image Hero
        if ($request->hasFile('hero_image')) {
            if ($landing->hero_image) {
                Storage::disk('public')->delete($landing->hero_image);
            }
            $landing->hero_image = $request->file('hero_image')->store('landing', 'public');
        }

        // Foto Tentang Kami
        if ($request->hasFile('about_us_image')) {
            if ($landing->about_us_image) {
                Storage::disk('public')->delete($landing->about_us_image);
            }
            $landing->about_us_image = $request->file('about_us_image')->store('landing', 'public');
        }

        if ($request->hasFile('organization_structure')) {
            if ($landing->organization_structure) {
                Storage::disk('public')->delete($landing->organization_structure);
            }
            $landing->organization_structure = $request->file('organization_structure')->store('landing', 'public');
        }

        $landing->update([
            'app_name' => $request->app_name,
            'hero_title' => $request->hero_title,
            'instagram' => $request->instagram,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'about_us' => $request->about_us,
            'leaflet_link' => $request->leaflet_link,
            'footer_description' => $request->footer_description,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Landing page berhasil diupdate');
    }
}
