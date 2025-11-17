@extends('layouts.app')

@section('title', 'Blog - SRE UNAIR')

@section('content')
<!-- Blog Section -->
<section id="blog" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Latest from our <span class="gradient-text">Blog</span></h2>
            <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div> {{-- Sesuaikan warna gradient jika perlu --}}
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Stay updated with the latest news, insights, and developments in the renewable energy sector.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($posts as $post)
                <!-- Blog Post Card -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col">
                    {{-- Post Image --}}
                    <div class="relative h-64 w-full overflow-hidden">
                        <img src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : 'https://via.placeholder.com/400x300.png?text=No+Blog+Image' }}"
                            alt="{{ $post->title }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                        {{-- Overlay Gradient --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    {{-- Post Content --}}
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex-grow">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-200">
                                {{ $post->title }}
                            </h3>

                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg class="h-4 w-4 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F j, Y') : 'Not Published' }}
                            </div>

                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ \Illuminate\Support\Str::limit($post->excerpt ?: strip_tags($post->content), 120) }}
                            </p>
                        </div>

                        {{-- Action Button --}}
                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="group/btn w-full flex items-center justify-center px-4 py-3 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <span class="mr-2">Read More</span>
                            <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="lg:col-span-3 text-center py-20">
                    <div class="max-w-md mx-auto">
                        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3-10l-4 4m0 0l-4-4m4 4v7" />
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">No Blog Posts Yet</h3>
                        <p class="text-gray-600">We're busy writing new content. Check back soon for updates!</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog') }}" {{-- Menggunakan route('blog') untuk link "View All" --}}
               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                View All Blog Posts
                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection