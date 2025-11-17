<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\BlogPost;
use App\Models\Category; // Pastikan model Category ada
use App\Models\Tag;      // Pastikan model Tag ada
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        // Mengambil post dengan eager loading user untuk menghindari N+1 problem
        // Menggunakan latest() untuk mengurutkan dari yang terbaru
        // paginate(10) untuk pagination
        $posts = BlogPost::with('user')->latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        // Buat data kategori dummy jika tidak ada
        $categories = collect([
            (object)['id' => 1, 'name' => 'Berita'],
            (object)['id' => 2, 'name' => 'Artikel'],
            (object)['id' => 3, 'name' => 'Tutorial'],
            (object)['id' => 4, 'name' => 'Tips & Trick']
        ]);
        
        $tags = collect(); // Kosong untuk sementara
        
        return view('admin.blog.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'category_id' => 'nullable|integer', 
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        // Generate unique slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;
        while (BlogPost::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        $data['slug'] = $slug;

        // Handle excerpt
        if (empty($data['excerpt']) && !empty($data['content'])) {
            $data['excerpt'] = Str::limit(strip_tags($data['content']), 150);
        }

        // Handle featured_image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        } else {
            $data['featured_image'] = null;
        }

        // Set published_at
        if ($request->status === 'published' && empty($request->published_at)) {
            $data['published_at'] = now();
        } elseif ($request->status !== 'published') {
            $data['published_at'] = null;
        }

        BlogPost::create($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully.');
    }

    public function show(BlogPost $blogPost)
    {
        // Eager load user untuk menampilkan nama author di view
        $blogPost->load('user'); 
        $post = $blogPost; // Alias for view consistency
        return view('admin.blog.show', compact('post'));
    }

    public function edit(BlogPost $blogPost)
    {
        $categories = Category::all();
        $tags = Tag::all();
        
        // Handle case when pivot table doesn't exist yet
        try {
            $selectedTags = $blogPost->tags->pluck('id')->toArray();
        } catch (\Exception $e) {
            $selectedTags = [];
        }

        $post = $blogPost; // Alias for view consistency
        return view('admin.blog.edit', compact('post', 'categories', 'tags', 'selectedTags'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Menggunakan 'featured_image' sesuai form Blade
            'status' => 'required|in:draft,published', // Sesuaikan status yang ada di migrasi Anda
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        // --- Logika untuk memastikan SLUG unik saat update ---
        // Hanya buat slug baru jika judul berubah
        if ($blogPost->title !== $request->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $count = 1;
            // Loop untuk memastikan slug unik, kecuali untuk postingan yang sedang diupdate
            while (BlogPost::where('slug', $slug)->where('id', '!=', $blogPost->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            $data['slug'] = $slug; // Tetapkan slug yang sudah unik
        } else {
            // Jika judul tidak berubah, gunakan slug yang sudah ada
            $data['slug'] = $blogPost->slug;
        }
        // --- Akhir logika slug unik ---

        // Handle upload dan hapus gambar lama
        if ($request->hasFile('featured_image')) {
            if ($blogPost->featured_image) {
                Storage::disk('public')->delete($blogPost->featured_image);
            }
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        } elseif (!isset($data['featured_image']) && $request->has('remove_image')) {
            if ($blogPost->featured_image) {
                Storage::disk('public')->delete($blogPost->featured_image);
                $data['featured_image'] = null;
            }
        }

        // Set published_at jika statusnya 'published' dan sebelumnya bukan 'published'
        if ($request->status === 'published' && $blogPost->status !== 'published') {
            $data['published_at'] = now();
        } elseif ($request->status !== 'published') {
            $data['published_at'] = null; // Jika tidak published, set null
        }


        $blogPost->update($data);

        // Sinkronisasi tags
        if ($request->has('tags')) {
            $blogPost->tags()->sync($request->tags);
        } else {
            $blogPost->tags()->detach(); // Hapus semua tags jika tidak ada yang dipilih
        }

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(BlogPost $blogPost)
    {
        // Hapus gambar terkait jika ada
        if ($blogPost->featured_image) {
            Storage::disk('public')->delete($blogPost->featured_image);
        }

        $blogPost->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully.');
    }
}
