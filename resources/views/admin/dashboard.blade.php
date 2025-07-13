@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 pt-24">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">SRE UNAIR Admin Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md transition-colors">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg border-l-4 border-blue-500">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-calendar-alt text-blue-600 text-3xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Events</dt>
                                <dd class="text-2xl font-bold text-gray-900">{{ $eventsCount }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.events.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            View all events →
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-lg rounded-lg border-l-4 border-green-500">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-tshirt text-green-600 text-3xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Merchandise Items</dt>
                                <dd class="text-2xl font-bold text-gray-900">{{ $merchandiseCount }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.merchandise.index') }}" class="text-green-600 hover:text-green-800 text-sm font-medium">
                            View all items →
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-lg rounded-lg border-l-4 border-yellow-500">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-project-diagram text-yellow-600 text-3xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Active Projects</dt>
                                <dd class="text-2xl font-bold text-gray-900">{{ $projectsCount }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.projects.index') }}" class="text-yellow-600 hover:text-yellow-800 text-sm font-medium">
                            View all projects →
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-lg rounded-lg border-l-4 border-purple-500">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-blog text-purple-600 text-3xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Blog Posts</dt>
                                <dd class="text-2xl font-bold text-gray-900">{{ $postsCount }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('admin.blog.index') }}" class="text-purple-600 hover:text-purple-800 text-sm font-medium">
                            View all posts →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Management Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Events Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-blue-500 to-blue-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-calendar-alt mr-2"></i>Recent Events
                        </h2>
                        <a href="{{ route('admin.events.create') }}" class="bg-white text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Event
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        @forelse($recentEvents as $event)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $event->title }}</h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    <i class="fas fa-calendar mr-1"></i>{{ $event->date->format('M d, Y') }}
                                    <i class="fas fa-clock ml-3 mr-1"></i>{{ $event->time }}
                                </p>
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt mr-1"></i>{{ $event->location }}
                                </p>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <a href="{{ route('admin.events.edit', $event->id) }}" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-calendar-times text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500 mb-4">No events found</p>
                            <a href="{{ route('admin.events.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                                Create First Event
                            </a>
                        </div>
                        @endforelse
                    </div>
                    @if($recentEvents->count() > 0)
                    <div class="mt-4 text-center">
                        <a href="{{ route('admin.events.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                            View All Events →
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Merchandise Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-green-500 to-green-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-tshirt mr-2"></i>Recent Merchandise
                        </h2>
                        <a href="{{ route('admin.merchandise.create') }}" class="bg-white text-green-600 hover:bg-green-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Item
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        @forelse($recentMerchandise as $item)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex items-center flex-1">
                                @if($item->image)
                                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="w-16 h-16 object-cover rounded-lg mr-4">
                                @else
                                <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-500"></i>
                                </div>
                                @endif
                                <div>
                                    <h3 class="font-semibold text-gray-900">{{ $item->name }}</h3>
                                    <p class="text-sm text-gray-600">Rp{{ number_format($item->price, 2) }}</p>
                                    <p class="text-xs text-gray-500">{{ $item->category }} • Stock: {{ $item->stock }}</p>
                                </div>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <a href="{{ route('admin.merchandise.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.merchandise.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus item ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-shopping-bag text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500 mb-4">No merchandise found</p>
                            <a href="{{ route('admin.merchandise.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition-colors">
                                Add First Item
                            </a>
                        </div>
                        @endforelse
                    </div>
                    @if($recentMerchandise->count() > 0)
                    <div class="mt-4 text-center">
                        <a href="{{ route('admin.merchandise.index') }}" class="text-green-600 hover:text-green-800 font-medium">
                            View All Items →
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Projects Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-yellow-500 to-yellow-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-project-diagram mr-2"></i>Recent Projects
                        </h2>
                        <a href="{{ route('admin.projects.create') }}" class="bg-white text-yellow-600 hover:bg-yellow-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Project
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        @forelse($recentProjects as $project)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $project->title }}</h3>
                                <p class="text-sm text-gray-600 mt-1">{{ $project->category }}</p>
                                <div class="flex items-center mt-2">
                                    <span class="inline-block px-2 py-1 text-xs font-medium rounded-full 
                                        @if($project->status == 'completed') bg-green-100 text-green-800
                                        @elseif($project->status == 'ongoing') bg-blue-100 text-blue-800
                                        @elseif($project->status == 'planning') bg-yellow-100 text-yellow-800
                                        @else bg-red-100 text-red-800 @endif">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-project-diagram text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500 mb-4">No projects found</p>
                            <a href="{{ route('admin.projects.create') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md transition-colors">
                                Create First Project
                            </a>
                        </div>
                        @endforelse
                    </div>
                    @if($recentProjects->count() > 0)
                    <div class="mt-4 text-center">
                        <a href="{{ route('admin.projects.index') }}" class="text-yellow-600 hover:text-yellow-800 font-medium">
                            View All Projects →
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Blog Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-purple-500 to-purple-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-blog mr-2"></i>Recent Blog Posts
                        </h2>
                        <a href="{{ route('admin.blog.create') }}" class="bg-white text-purple-600 hover:bg-purple-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Post
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        @forelse($recentPosts as $post)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $post->title }}</h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    <i class="fas fa-user mr-1"></i>{{ $post->user->name }}
                                    <i class="fas fa-calendar ml-3 mr-1"></i>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}
                                </p>
                                <span class="inline-block px-2 py-1 text-xs font-medium rounded-full mt-2
                                    @if($post->status == 'published') bg-green-100 text-green-800
                                    @else bg-yellow-100 text-yellow-800 @endif">
                                    {{ ucfirst($post->status) }}
                                </span>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus post ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-blog text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500 mb-4">No blog posts found</p>
                            <a href="{{ route('admin.blog.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md transition-colors">
                                Write First Post
                            </a>
                        </div>
                        @endforelse
                    </div>
                    @if($recentPosts->count() > 0)
                    <div class="mt-4 text-center">
                        <a href="{{ route('admin.blog.index') }}" class="text-purple-600 hover:text-purple-800 font-medium">
                            View All Posts →
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush
