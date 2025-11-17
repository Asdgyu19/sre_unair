@extends('layouts.admin')
@section('title', 'View Blog Post')

@section('content')
    <div class="mb-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Blog Post Details</h1>
                <p class="mt-2 text-sm text-gray-600">Detailed view of the blog post: "{{ $post->title }}".</p>
            </div>
            <a href="{{ route('admin.blog.index') }}" 
               class="inline-flex items-center justify-center px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium rounded-lg shadow-sm hover:shadow-md transition-all duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Blog List
            </a>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        {{-- Featured Image --}}
        @if ($post->featured_image)
            <div class="w-full h-80 overflow-hidden bg-gray-100 flex items-center justify-center">
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
            </div>
        @else
            <div class="w-full h-80 bg-gray-100 flex items-center justify-center">
                <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3-10l-4 4m0 0l-4-4m4 4v7"/>
                </svg>
            </div>
        @endif

        <div class="p-6 md:p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-3">{{ $post->title }}</h1>
            
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span>By <span class="font-medium text-gray-800">{{ $post->user->name ?? 'N/A' }}</span></span>
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>Published: <span class="font-medium text-gray-800">{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('M d, Y H:i') : 'Not Published' }}</span></span>
                </div>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold
                    @if($post->status == 'published') 
                        bg-green-100 text-green-800 border border-green-200
                    @else 
                        bg-yellow-100 text-yellow-800 border border-yellow-200
                    @endif">
                    @if($post->status == 'published')
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    @else
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9a1 1 0 000 2h2a1 1 0 100-2h-2z" clip-rule="evenodd"/></svg>
                    @endif
                    {{ ucfirst($post->status) }}
                </span>
            </div>

            <div class="prose max-w-none text-gray-800 leading-relaxed mt-6 mb-8">
                {!! $post->content !!}
            </div>

            @if($post->excerpt)
                <div class="mt-6 p-5 bg-gray-50 rounded-xl border border-gray-100">
                    <h2 class="text-sm font-semibold text-gray-600 mb-2 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Excerpt
                    </h2>
                    <p class="text-gray-700 mt-1">{{ $post->excerpt }}</p>
                </div>
            @endif

            <div class="mt-8 flex justify-end space-x-3">
                <a href="{{ route('admin.blog.edit', $post) }}"
                   class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Edit Post
                </a>
                <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" 
                      onsubmit="return confirm('Are you sure you want to delete this blog post?');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Delete Post
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection