@extends('layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold mb-6">Edit Blog Post</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.blog.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block font-medium">Content</label>
            <textarea name="content" id="content" rows="6" class="w-full border rounded px-3 py-2" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="excerpt" class="block font-medium">Excerpt (Optional)</label>
            <textarea name="excerpt" id="excerpt" rows="3" class="w-full border rounded px-3 py-2">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="status" class="block font-medium">Status</label>
            <select name="status" id="status" class="w-full border rounded px-3 py-2">
                <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="published_at" class="block font-medium">Published Date (Optional)</label>
            <input type="datetime-local" name="published_at" id="published_at" class="w-full border rounded px-3 py-2"
                value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="mb-4">
            <label for="image" class="block font-medium">Current Image</label>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-64 mb-2 rounded">
            @else
                <p class="text-sm text-gray-500 mb-2">No image uploaded.</p>
            @endif
            <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded">
            Update Post
        </button>
    </form>
</div>
@endsection
