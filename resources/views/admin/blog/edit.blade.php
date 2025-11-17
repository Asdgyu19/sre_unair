@extends('layouts.admin')
@section('title', 'Edit Blog Post')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Edit Blog Post</h1>
        <p class="mt-2 text-sm text-gray-600">Update the details for the post "{{ $post->title }}".</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
        {{-- Pesan error validasi --}}
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6">
                <div class="flex items-center mb-2">
                    <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h4 class="font-semibold">Whoops! Something went wrong.</h4>
                </div>
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.blog.update', $post) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" name="title" id="title" 
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:border-purple-500 focus:ring-purple-500 text-gray-900" 
                           value="{{ old('title', $post->title) }}" required>
                    @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="mt-6">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content" id="content" rows="8" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:border-purple-500 focus:ring-purple-500 text-gray-900" 
                          required>{{ old('content', $post->content) }}</textarea>
                @error('content') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="mt-6">
                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Excerpt (Optional)</label>
                <textarea name="excerpt" id="excerpt" rows="3" 
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:border-purple-500 focus:ring-purple-500 text-gray-900" 
                          placeholder="A short summary of the blog post.">{{ old('excerpt', $post->excerpt) }}</textarea>
                @error('excerpt') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select name="status" id="status" 
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:border-purple-500 focus:ring-purple-500 text-gray-900" 
                            required>
                        <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('status') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="published_at" class="block text-sm font-medium text-gray-700 mb-1">Published Date (Optional)</label>
                    <input type="datetime-local" name="published_at" id="published_at" 
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:border-purple-500 focus:ring-purple-500 text-gray-900"
                           value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}">
                    <p class="mt-1 text-xs text-gray-500">Leave blank for immediate publish or if status is Draft.</p>
                    @error('published_at') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="mt-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                @if ($post->featured_image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-64 rounded-lg shadow-sm border border-gray-200">
                    </div>
                @else
                    <p class="text-gray-500 text-sm mb-4">No image currently uploaded.</p>
                @endif
                
                <input type="file" name="image" id="image" 
                       class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100" 
                       accept="image/*">
                @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="mt-8 flex justify-end space-x-3">
                <a href="{{ route('admin.blog.index') }}" 
                   class="px-5 py-2.5 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium rounded-lg transition-colors duration-200">
                    Cancel
                </a>
                <button type="submit" 
                        class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-3m-6-6l-3 3m0 0l-3-3m3 3V3m6 16l3-3m0 0l3 3m-3-3h3a2 2 0 002-2V9a2 2 0 00-2-2h-3"/>
                    </svg>
                    Update Post
                </button>
            </div>
        </form>
    </div>
@endsection