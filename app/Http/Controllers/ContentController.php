<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentCategory;
use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ContentController extends Controller
{

    public function printPdf(ContentCategory $category)
    {
        $contents = $category->contents()
            ->orderBy('valid_from', 'desc')
            ->get();

        $pdf = Pdf::loadView('pdf.contents', [
            'category' => $category,
            'contents' => $contents
        ]);

        return $pdf->stream(
            'konten-' . $category->slug . '.pdf'
        );

        // Jika ingin langsung download:
        // return $pdf->download('konten-'.$category->slug.'.pdf');
    }
    /**
     * Display listing (optional)
     */
    public function index()
    {
        return view('content');
    }

    /**
     * Show by category
     */
    public function category(ContentCategory $category)
    {
        $contents = $category->contents()
            ->latest()
            ->paginate(10);

        return view('admin.content', compact('contents', 'category'));
    }

    /**
     * Store new content
     */

public function store(Request $request)
{
    $data = $request->validate([
        'content_category_id' => ['required', 'exists:content_categories,id'],
        'title' => ['required', 'string', 'max:255'],
        'valid_from' => ['required', 'date'],
        'valid_until' => ['required', 'date', 'after_or_equal:valid_from'],
        'document_url' => ['nullable', 'url'],
    ]);

    Content::create($data);

    return redirect()->back()
        ->with('success', 'Data mitra berhasil ditambahkan.');
}

public function update(Request $request, Content $content)
{
    $data = $request->validate([
        'content_category_id' => ['required', 'exists:content_categories,id'],
        'title' => ['required', 'string', 'max:255'],
        'valid_from' => ['required', 'date'],
        'valid_until' => ['required', 'date', 'after_or_equal:valid_from'],
        'document_url' => ['nullable', 'url'],
    ]);

    $content->update($data);

    return redirect()->back()
        ->with('success', 'Data mitra berhasil diperbarui.');
}

    /**
     * Delete content
     */
    public function destroy(Content $content)
    {
        // hapus image
        if ($content->image && Storage::disk('public')->exists($content->image)) {
            Storage::disk('public')->delete($content->image);
        }

        $content->delete();

        return redirect()->back()->with('success', 'Content berhasil dihapus.');
    }
}
