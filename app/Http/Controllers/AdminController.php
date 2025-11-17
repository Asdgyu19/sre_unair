<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Merchandise;
use App\Models\Project;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
   

    public function dashboard()
    {
        $data = [
            'eventsCount' => Event::count(),
            'merchandiseCount' => Merchandise::count(),
            'projectsCount' => Project::count(),
            'postsCount' => BlogPost::count(),
            'recentEvents' => Event::latest()->take(5)->get(),
            'recentMerchandise' => Merchandise::latest()->take(5)->get(),
            'recentProjects' => Project::latest()->take(5)->get(),
            'recentPosts' => BlogPost::with('user')->latest()->take(5)->get(),
        ];

        return view('admin.dashboard', $data);
    }

    // Event Management
    public function storeEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/events', 'public');
        }

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'image' => $imagePath,
        ]);

        return response()->json(['success' => true, 'message' => 'Event created successfully.', 'event' => $event]);
    }

    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($event->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $event->image));
            }
            
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image = 'storage/' . $imagePath;
        }

        $event->save();

        return response()->json(['success' => true, 'message' => 'Event updated successfully']);
    }

    public function destroyEvent($id)
    {
        $event = Event::findOrFail($id);
        
        // Delete image file
        if ($event->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $event->image));
        }
        
        $event->delete();

        return response()->json(['success' => true, 'message' => 'Event deleted successfully']);
    }

    public function frontend()
    {
        $events = Event::latest()->get(); // ambil semua event
        return view('events', compact('events'));
    }

    // Merchandise Management
    public function storeMerchandise(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $merch = new Merchandise();
        $merch->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('merchandise', 'public');
            $merch->image = 'storage/' . $path;
        }

        $merch->save();

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise created successfully.');
    }

    public function updateMerchandise(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $merch = Merchandise::findOrFail($id);
        $merch->fill($request->except('image'));

        if ($request->hasFile('image')) {
            if ($merch->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $merch->image));
            }
            $path = $request->file('image')->store('merchandise', 'public');
            $merch->image = 'storage/' . $path;
        }

        $merch->save();

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise updated successfully.');
    }

    public function destroyMerchandise($id)
    {
        $merch = Merchandise::findOrFail($id);

        if ($merch->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $merch->image));
        }

        $merch->delete();

        return redirect()->route('admin.merchandise.index')->with('success', 'Merchandise deleted successfully.');
    }

    // Project Management
    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'status' => 'required|in:planning,ongoing,completed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->status = $request->status;
        $project->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $project->image = 'storage/' . $imagePath;
        }

        $project->save();

        return response()->json(['success' => true, 'message' => 'Project created successfully']);
    }

    // Blog Post Management
    public function storeBlogPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        $post = new BlogPost();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->excerpt = $request->input('excerpt') ?? Str::limit(strip_tags($request->input('content')), 150);
        $post->slug = Str::slug($request->input('title'));
        $post->status = $request->input('status');
        // $post->author_id = auth()->id();

        if ($request->status === 'published') {
            $post->published_at = now();
        }

        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blog', 'public');
            $post->featured_image = 'storage/' . $imagePath;
        }

        $post->save();

        return response()->json(['success' => true, 'message' => 'Blog post created successfully']);
    }
}