<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Announcements -->
            @if($latestAnnouncements->count() > 0)
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4">Announcements</h3>
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                        @foreach($latestAnnouncements as $announcement)
                            <div class="mb-4 last:mb-0">
                                <h4 class="font-semibold text-yellow-800">{{ $announcement->title }}</h4>
                                <p class="text-sm text-yellow-700">{{ Str::limit($announcement->content, 150) }}</p>
                                <p class="text-xs text-yellow-600 mt-1">Posted on {{ $announcement->start_date->format('d M Y') }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Latest Blog Posts -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Latest Blog Posts</h3>
                            <a href="{{ route('blog') }}" class="text-sm text-green-600 hover:underline">View All</a>
                        </div>
                        
                        @if($latestBlogPosts->count() > 0)
                            <div class="space-y-4">
                                @foreach($latestBlogPosts as $post)
                                    <div class="border-b border-gray-100 pb-4 last:border-b-0 last:pb-0">
                                        <h4 class="font-semibold">{{ $post->title }}</h4>
                                        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($post->excerpt ?? $post->content, 100) }}</p>
                                        <div class="flex justify-between items-center mt-2">
                                            <span class="text-xs text-gray-500">{{ $post->published_at->format('d M Y') }}</span>
                                            <a href="{{ route('blog.show', $post->slug) }}" class="text-sm text-green-600 hover:underline">Read More</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">No blog posts available.</p>
                        @endif
                    </div>
                </div>
                
                <!-- Upcoming Events -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Upcoming Events</h3>
                            <a href="{{ route('events') }}" class="text-sm text-blue-600 hover:underline">View All</a>
                        </div>
                        
                        @if($upcomingEvents->count() > 0)
                            <div class="space-y-4">
                                @foreach($upcomingEvents as $event)
                                    <div class="border-b border-gray-100 pb-4 last:border-b-0 last:pb-0">
                                        <h4 class="font-semibold">{{ $event->title }}</h4>
                                        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($event->description, 100) }}</p>
                                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mt-2">
                                            <div class="flex items-center text-xs text-gray-500 mb-2 sm:mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $event->start_date->format('d M Y, H:i') }}
                                            </div>
                                            <a href="{{ route('events.show', $event->id) }}" class="text-sm text-blue-600 hover:underline">View Details</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">No upcoming events.</p>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="{{ route('education') }}" class="bg-purple-50 p-4 rounded-lg text-center hover:bg-purple-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <span class="block mt-2 font-medium text-purple-800">Educational Resources</span>
                        </a>
                        
                        <a href="{{ route('projects') }}" class="bg-green-50 p-4 rounded-lg text-center hover:bg-green-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <span class="block mt-2 font-medium text-green-800">Projects Portfolio</span>
                        </a>
                        
                        <a href="{{ route('merchandise') }}" class="bg-red-50 p-4 rounded-lg text-center hover:bg-red-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <span class="block mt-2 font-medium text-red-800">Merchandise</span>
                        </a>
                        
                        <a href="{{ route('about') }}" class="bg-blue-50 p-4 rounded-lg text-center hover:bg-blue-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="block mt-2 font-medium text-blue-800">About SRE UNAIR</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

