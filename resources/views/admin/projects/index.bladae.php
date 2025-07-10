@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Projects Management</h1>
            <a href="{{ route('admin.projects.create') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Project
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            @forelse($projects as $project)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-project-diagram text-gray-500 text-4xl"></i>
                </div>
                @endif
                
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $project->title }}</h3>
                        <span class="px-3 py-1 text-sm font-medium rounded-full 
                            @if($project->status == 'completed') bg-green-100 text-green-800
                            @elseif($project->status == 'ongoing') bg-blue-100 text-blue-800
                            @elseif($project->status == 'planning') bg-yellow-100 text-yellow-800
                            @else bg-red-100 text-red-800 @endif">
                            {{ ucfirst($project->status) }}
                        </span>
                    </div>
                    
                    <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 120) }}</p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-tag mr-2"></i>
                            <span>{{ $project->category }}</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-calendar mr-2"></i>
                            <span>{{ $project->start_date->format('M d, Y') }} - {{ $project->end_date ? $project->end_date->format('M d, Y') : 'Ongoing' }}</span>
                        </div>
                    </div>
                    
                    <div class="flex space-x-2 mb-4">
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" class="text-gray-600 hover:text-gray-800">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                        @endif
                        @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-external-link-alt text-lg"></i>
                        </a>
                        @endif
                    </div>
                    
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-3 rounded-md text-sm transition-colors">
                            Edit
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-3 rounded-md text-sm transition-colors">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-project-diagram text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-500 text-lg">No projects found</p>
                <a href="{{ route('admin.projects.create') }}" class="mt-4 inline-block bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-md transition-colors">
                    Add First Project
                </a>
            </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection
