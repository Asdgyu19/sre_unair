@extends('layouts.app')

@section('title', 'Single Post - SRE UNAIR')

@section('content')
<!-- Single Post Section -->
<section id="single-post" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6 md:p-10">
            <!-- Optional Image -->
            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-lg mb-6">

            <!-- Date -->
            <div class="flex items-center text-sm text-gray-500 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                {{ $post->published_at->format('F j, Y') }}
            </div>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ $post['title'] }}</h1>

            <!-- Content -->
            <div class="text-gray-700 text-lg leading-relaxed space-y-6 prose max-w-none"style="text-align: justify;">
                {!! nl2br(e($post['content'])) !!}
            </div>

            <!-- Back to Blog Button -->
            <div class="mt-10">
                <a href="/blog" class="inline-flex items-center px-5 py-3 text-blue-700 bg-blue-100 rounded-md hover:bg-blue-200 transition">
                    ← Back to Blog
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
