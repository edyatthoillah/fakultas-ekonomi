<?php
namespace App\Http\Controllers;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudyProgramController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::latest()->get();

        return view('admin.study-programs.index', compact('studyPrograms'));
    }

    public function create()
    {
        return view('admin.study-programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'hero_title' => 'nullable|string|max:255',
            'hero_image' => 'nullable|image|max:4096',
            'description' => 'nullable',
            'head_of_program' => 'nullable|string|max:255',
            'head_of_program_photo' => 'nullable|image|max:2048',
            'head_of_program_greeting' => 'nullable',
            'vision' => 'nullable',
            'mission' => 'nullable',
            'organization_structure' => 'nullable|image|max:4096',
            'accreditation' => 'nullable|string|max:255',
            'accreditation_number' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'brochure_file' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $validated['slug'] = Str::slug($request->name);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('study-programs/logos', 'public');
        }

        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $request->file('hero_image')->store('study-programs/heroes', 'public');
        }

        if ($request->hasFile('head_of_program_photo')) {
            $validated['head_of_program_photo'] = $request->file('head_of_program_photo')->store('study-programs/kaprodi', 'public');
        }

        if ($request->hasFile('organization_structure')) {
            $validated['organization_structure'] = $request->file('organization_structure')->store('study-programs/structures', 'public');
        }

        if ($request->hasFile('brochure_file')) {
            $validated['brochure_file'] = $request->file('brochure_file')->store('study-programs/brochures', 'public');
        }

        StudyProgram::create($validated);

        return redirect()
            ->route('admin.study-programs.index')
            ->with('success', 'Program studi berhasil ditambahkan.');
    }

    public function edit(StudyProgram $studyProgram)
    {
        return view('admin.study-programs', compact('studyProgram'));
    }

public function update(Request $request, StudyProgram $studyProgram)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|max:2048',
        'hero_title' => 'nullable|string|max:255',
        'hero_image' => 'nullable|image|max:4096',
        'description' => 'nullable',
        'head_of_program' => 'nullable|string|max:255',
        'head_of_program_photo' => 'nullable|image|max:2048',
        'head_of_program_greeting' => 'nullable',
        'vision' => 'nullable',
        'mission' => 'nullable',
        'organization_structure' => 'nullable|image|max:4096',
        'accreditation' => 'nullable|string|max:255',
        'accreditation_number' => 'nullable|string|max:255',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:50',
        'brochure_file' => 'nullable',
    ]);

    $validated['slug'] = Str::slug($request->name);

    if ($request->hasFile('logo')) {

        if ($studyProgram->logo) {
            Storage::disk('public')->delete($studyProgram->logo);
        }

        $validated['logo'] = $request->file('logo')
            ->store('study-programs/logos', 'public');
    }

    if ($request->hasFile('hero_image')) {

        if ($studyProgram->hero_image) {
            Storage::disk('public')->delete($studyProgram->hero_image);
        }

        $validated['hero_image'] = $request->file('hero_image')
            ->store('study-programs/heroes', 'public');
    }

    if ($request->hasFile('head_of_program_photo')) {

        if ($studyProgram->head_of_program_photo) {
            Storage::disk('public')->delete($studyProgram->head_of_program_photo);
        }

        $validated['head_of_program_photo'] = $request->file('head_of_program_photo')
            ->store('study-programs/kaprodi', 'public');
    }

    if ($request->hasFile('organization_structure')) {

        if ($studyProgram->organization_structure) {
            Storage::disk('public')->delete($studyProgram->organization_structure);
        }

        $validated['organization_structure'] = $request->file('organization_structure')
            ->store('study-programs/structures', 'public');
    }

    if ($request->hasFile('brochure_file')) {

        if ($studyProgram->brochure_file) {
            Storage::disk('public')->delete($studyProgram->brochure_file);
        }

        $validated['brochure_file'] = $request->file('brochure_file')
            ->store('study-programs/brochures', 'public');
    }

    $studyProgram->update($validated);

    return back()->with(
        'success',
        'Program studi berhasil diperbarui.'
    );
}

    public function destroy(StudyProgram $studyProgram)
    {
        Storage::disk('public')->delete([
            $studyProgram->logo,
            $studyProgram->hero_image,
            $studyProgram->head_of_program_photo,
            $studyProgram->organization_structure,
            $studyProgram->brochure_file,
        ]);

        $studyProgram->delete();

        return redirect()
            ->route('admin.study-programs.index')
            ->with('success', 'Program studi berhasil dihapus.');
    }
}
