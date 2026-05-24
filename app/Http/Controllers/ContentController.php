<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentCategory;
use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ContentController extends Controller
{
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
    public function store(StoreContentRequest $request)
    {
        $data = $request->validated();

        // upload image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('contents', 'public');
        }

        Content::create($data);

        return redirect()->back()->with('success', 'Content berhasil ditambahkan.');
    }

    /**
     * Update content
     */
    public function update(UpdateContentRequest $request, Content $content)
    {
        $data = $request->validated();

        // update image jika ada file baru
        if ($request->hasFile('image')) {

            // hapus image lama
            if ($content->image && Storage::disk('public')->exists($content->image)) {
                Storage::disk('public')->delete($content->image);
            }

            $data['image'] = $request->file('image')->store('contents', 'public');
        }

        $content->update($data);

        return redirect()->back()->with('success', 'Content berhasil diupdate.');
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
