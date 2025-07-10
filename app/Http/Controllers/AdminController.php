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
            'recentPosts' => BlogPost::latest()->take(5)->get(),
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

    // Merchandise Management
    public function storeMerchandise(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $merchandise = new Merchandise();
        $merchandise->name = $request->name;
        $merchandise->description = $request->description;
        $merchandise->price = $request->price;
        $merchandise->category = $request->category;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('merchandise', 'public');
            $merchandise->image = 'storage/' . $imagePath;
        }

        $merchandise->save();

        return response()->json(['success' => true, 'message' => 'Merchandise created successfully']);
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
        $post->title = $request->title;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt ?? Str::limit(strip_tags($request->content), 150);
        $post->slug = Str::slug($request->title);
        $post->status = $request->status;
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