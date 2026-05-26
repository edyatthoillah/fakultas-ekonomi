<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tag;
use App\Models\Category;
use App\Models\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // 📄 LIST NEWS
    public function index()
    {
        $news = News::with(['category', 'tags', 'user'])
            ->latest()
            ->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    // ➕ FORM CREATE
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.news.create', compact('categories', 'tags'));
    }

    // 💾 STORE NEWS
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'array',
            'images.*' => 'nullable|image',
        ]);

        // 🔥 GENERATE BASE SLUG
        $baseSlug = Str::slug($request->title);
        $slug = $baseSlug;
        $counter = 1;

        // 🔥 CEK DUPLIKAT SLUG
        while (News::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        // upload thumbnail
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('news/thumbnails', 'public');
        }

        try {

            // create news
            $news = News::create([
                'title' => $request->title,
                'slug' => $slug,
                'content' => $request->content,
                'thumbnail' => $thumbnailPath,
                'category_id' => $request->category_id,
                'user_id' => auth()->id(),
                'status' => $request->status ?? 'draft',
                'published_at' => $request->status == 'published' ? now() : null,
            ]);

            // tags sync
            if ($request->tags) {
                $news->tags()->sync($request->tags);
            }

            // multiple images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('news/images', 'public');

                    NewsImage::create([
                        'news_id' => $news->id,
                        'image_path' => $path,
                    ]);
                }
            }

            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Berita berhasil ditambahkan');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan berita');

        }
    }

    // 👁 SHOW DETAIL
    public function show($id)
    {
        $news = News::with(['category', 'tags', 'images', 'user'])
            ->findOrFail($id);

        // tambah views
        $news->increment('views');

        return view('admin.news.show', compact('news'));
    }

    // ✏ EDIT FORM
    public function edit($id)
    {
        $news = News::with(['tags', 'images'])->findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.news.edit', compact('news', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'array',
        ]);

        try {

            // 🔥 BASE SLUG
            $baseSlug = Str::slug($request->title);
            $slug = $baseSlug;
            $counter = 1;

            // 🔥 CEK DUPLIKAT (EXCLUDE CURRENT ID)
            while (
                News::where('slug', $slug)
                    ->where('id', '!=', $news->id)
                    ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }

            // 🖼️ THUMBNAIL UPDATE
            if ($request->hasFile('thumbnail')) {

                if ($news->thumbnail) {
                    Storage::disk('public')->delete($news->thumbnail);
                }

                $news->thumbnail = $request->file('thumbnail')
                    ->store('news/thumbnails', 'public');
            }

            // 🔄 UPDATE DATA
            $news->update([
                'title' => $request->title,
                'slug' => $slug,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'status' => $request->status ?? 'draft',
                'published_at' => $request->status == 'published'
                    ? ($news->published_at ?? now())
                    : $news->published_at,
            ]);

            // 🏷️ TAGS SYNC
            $news->tags()->sync($request->tags ?? []);

            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Berita berhasil diupdate');

        } catch (\Exception $e) {

            return back()
                ->withInput()
                ->with('error', 'Gagal mengupdate berita');

        }
    }

    // 🗑 DELETE
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // hapus thumbnail
        if ($news->thumbnail) {
            Storage::disk('public')->delete($news->thumbnail);
        }

        // hapus images
        foreach ($news->images as $img) {
            Storage::disk('public')->delete($img->image_path);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus');
    }
}
