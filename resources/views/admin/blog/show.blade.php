@extends('layouts.app')

@section('title', 'View Blog Post')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-4">
    <div class="mb-6">
        <a href="{{ route('admin.posts.index') }}" class="text-blue-600 hover:underline">&larr; Back to Blog Management</a>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
        @endif

        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

            <div class="flex items-center text-sm text-gray-600 mb-2">
                <span class="mr-2">By {{ $post->user->name }}</span>
                <span class="mx-2">&bull;</span>
                <span>{{ $post->published_at ? $post->published_at->format('M d, Y H:i') : 'Not Published' }}</span>
            </div>

            <div class="mb-4">
                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                    @if($post->status == 'published') bg-green-100 text-green-800
                    @else bg-yellow-100 text-yellow-800 @endif">
                    {{ ucfirst($post->status) }}
                </span>
            </div>

            <div class="prose max-w-none text-gray-800">
                {!! $post->content !!}
            </div>

            @if($post->excerpt)
                <div class="mt-6 p-4 bg-gray-50 rounded">
                    <h2 class="text-sm font-semibold text-gray-600">Excerpt</h2>
                    <p class="text-gray-700 mt-1">{{ $post->excerpt }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
