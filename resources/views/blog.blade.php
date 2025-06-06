@extends('layouts.app')

@section('title', 'Blog - SRE UNAIR')

@section('content')
<!-- Blog Section -->
<section id="blog" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Latest from our <span class="gradient-text">Blog</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Stay updated with the latest news, insights, and developments in the renewable energy sector.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <!-- Blog Post -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <img src="{{ asset($post->featured_image) }}" alt="The Future of Solar Energy" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $post->published_at->format('F j, Y') }}
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post['title'] }}</h3>
                        <p class="text-gray-700 mb-4">
                            {{ Str::limit($post->content, 115) }}
                        </p>
                        <a href="/posts/{{ $post->slug }}" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                View All Blog Posts
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
