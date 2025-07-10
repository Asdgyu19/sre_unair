@extends('layouts.app')



@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-15">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <!-- <img src="{{ asset('/assets/images/logo.png') }}" alt="SRE UNAIR" class="h-10 w-10 mr-3"> -->
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
                </div>
            </div>
        </div>

        <!-- Management Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Events Management -->
            <!-- Events Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-blue-500 to-blue-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-calendar-alt mr-2"></i>Events Management
                        </h2>
                        <button onclick="openModal('eventModal')" class="bg-white text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Event
                        </button>
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
                                <button onclick="editEvent({{ $event->id }})" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </button>
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
                            <p class="text-gray-500">No events found</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Merchandise Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-green-500 to-green-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-tshirt mr-2"></i>Merchandise Management
                        </h2>
                        <button onclick="openModal('merchandiseModal')" class="bg-white text-green-600 hover:bg-green-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Item
                        </button>
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
                                    <p class="text-sm text-gray-600">${{ number_format($item->price, 2) }}</p>
                                    <p class="text-xs text-gray-500">{{ $item->category }}</p>
                                </div>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <button onclick="editMerchandise({{ $item->id }})" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteMerchandise({{ $item->id }})" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-shopping-bag text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500">No merchandise found</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Projects Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-yellow-500 to-yellow-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-project-diagram mr-2"></i>Projects Management
                        </h2>
                        <button onclick="openModal('projectModal')" class="bg-white text-yellow-600 hover:bg-yellow-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Project
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        @forelse($recentProjects as $project)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $project->title }}</h3>
                                <p class="text-sm text-gray-600 mt-1">{{ $project->category }}</p>
                                <span class="inline-block px-2 py-1 text-xs font-medium rounded-full 
                                    @if($project->status == 'completed') bg-green-100 text-green-800
                                    @elseif($project->status == 'ongoing') bg-blue-100 text-blue-800
                                    @else bg-yellow-100 text-yellow-800 @endif">
                                    {{ ucfirst($project->status) }}
                                </span>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <button onclick="editProject({{ $project->id }})" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteProject({{ $project->id }})" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-project-diagram text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500">No projects found</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Blog Management -->
            <div class="bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-purple-500 to-purple-600">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-white flex items-center">
                            <i class="fas fa-blog mr-2"></i>Blog Management
                        </h2>
                        <button onclick="openModal('blogModal')" class="bg-white text-purple-600 hover:bg-purple-50 px-4 py-2 rounded-md font-medium transition-colors">
                            <i class="fas fa-plus mr-2"></i>Add Post
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        @forelse($recentPosts as $post)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900">{{ $post->title }}</h3>
                                <p class="text-sm text-gray-600 mt-1">
                                    <i class="fas fa-calendar mr-1"></i>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}
                                </p>
                                <span class="inline-block px-2 py-1 text-xs font-medium rounded-full 
                                    @if($post->status == 'published') bg-green-100 text-green-800
                                    @else bg-yellow-100 text-yellow-800 @endif">
                                    {{ ucfirst($post->status) }}
                                </span>
                            </div>
                            <div class="flex space-x-2 ml-4">
                                <button onclick="editPost({{ $post->id }})" class="text-blue-600 hover:text-blue-800 p-2 rounded-full hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deletePost({{ $post->id }})" class="text-red-600 hover:text-red-800 p-2 rounded-full hover:bg-red-100 transition-colors">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <i class="fas fa-blog text-gray-400 text-4xl mb-4"></i>
                            <p class="text-gray-500">No blog posts found</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Event Modal -->
<div id="eventModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium text-gray-900">Add/Edit Event</h3>
                <button onclick="closeModal('eventModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form id="eventForm" method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Event Title</label>
                        <input type="text" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input type="date" name="date" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Time</label>
                            <input type="time" name="time" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                        <input type="text" name="location" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Event Image</label>
                        <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" onclick="closeModal('eventModal')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Save Event</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add similar modals for Merchandise, Projects, and Blog -->

@endsection

@push('scripts')
<script>
function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}

// Event Form Submission
document.getElementById('eventForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('/admin/events', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            closeModal('eventModal');
            location.reload();
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while saving the event.');
    });
});

function deleteEvent(id) {
    if (confirm('Are you sure you want to delete this event?')) {
        fetch(`/admin/events/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error: ' + data.message);
            }
        });
    }
}

// Add similar functions for merchandise, projects, and blog posts
</script>
@endpush