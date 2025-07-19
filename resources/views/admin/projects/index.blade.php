@extends('layouts.admin')
@section('title', 'Manajemen Proyek')

@section('content')
    {{-- Inisialisasi Alpine.js untuk kontrol modal --}}
    <div x-data="{ modalOpen: false, selectedProject: null }">

        {{-- Header Halaman --}}
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Project Management</h1>
                    <p class="mt-2 text-sm text-gray-600">Manage and monitor all your projects in one place</p>
                </div>
                <a href="{{ route('admin.projects.create') }}" 
                   class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Add New Project
                </a>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total Projects</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $projects->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Completed</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $projects->where('status', 'Selesai')->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">In Progress</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $projects->where('status', 'Berjalan')->count() }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Cancelled</p>
                        <p class="text-2xl font-bold text-gray-900">{{ $projects->where('status', 'Dibatalkan')->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabel Manajemen Proyek --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900">Projects Overview</h3>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-100">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Project</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">By</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Timeline</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-50">
                        @forelse ($projects as $project)
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                                <span class="text-white font-semibold text-sm">{{ substr($project->name, 0, 2) }}</span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-gray-900">{{ $project->name }}</div>
                                            <div class="text-sm text-gray-500">ID: #{{ $project->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $categoryClass = '';
                                        switch ($project->category) {
                                            case 'social':
                                                $categoryClass = 'bg-blue-100 text-blue-800';
                                                break;
                                            case 'academic':
                                                $categoryClass = 'bg-green-100 text-green-800';
                                                break;
                                            case 'external':
                                                $categoryClass = 'bg-purple-100 text-purple-800';
                                                break;
                                            case 'internal':
                                                $categoryClass = 'bg-indigo-100 text-indigo-800';
                                                break;
                                            default:
                                                $categoryClass = 'bg-gray-100 text-gray-800';
                                        }
                                    @endphp
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $categoryClass }}">
                                        {{ ucfirst($project->category) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ $project->by }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    <div class="space-y-1">
                                        <div class="flex items-center text-xs">
                                            <svg class="w-3 h-3 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Start: {{ $project->start_date ? \Carbon\Carbon::parse($project->start_date)->format('M d, Y') : 'Not set' }}
                                        </div>
                                        <div class="flex items-center text-xs">
                                            <svg class="w-3 h-3 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                            </svg>
                                            End: {{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('M d, Y') : 'Not set' }}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold
                                        @if($project->status == 'Selesai') 
                                            bg-green-100 text-green-800 border border-green-200
                                        @elseif($project->status == 'Berjalan') 
                                            bg-blue-100 text-blue-800 border border-blue-200
                                        @elseif($project->status == 'Dibatalkan') 
                                            bg-red-100 text-red-800 border border-red-200
                                        @else 
                                            bg-gray-100 text-gray-800 border border-gray-200
                                        @endif">
                                        @if($project->status == 'Selesai')
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        @elseif($project->status == 'Berjalan')
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                            </svg>
                                        @elseif($project->status == 'Dibatalkan')
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                        @endif
                                        {{ $project->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <div class="flex items-center justify-end space-x-2">
                                        {{-- Tombol Show untuk memicu modal --}}
                                        <button @click="selectedProject = {{ json_encode($project) }}; modalOpen = true" 
                                                class="inline-flex items-center px-3 py-1.5 bg-green-100 hover:bg-green-200 text-green-700 text-xs font-medium rounded-lg transition-colors duration-200">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                            View
                                        </button>
                                        
                                        <a href="{{ route('admin.projects.edit', $project->id) }}"
                                           class="inline-flex items-center px-3 py-1.5 bg-blue-100 hover:bg-blue-200 text-blue-700 text-xs font-medium rounded-lg transition-colors duration-200">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                            Edit
                                        </a>
                                        
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this project?');" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-100 hover:bg-red-200 text-red-700 text-xs font-medium rounded-lg transition-colors duration-200">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-16 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">No projects found</h3>
                                        <p class="text-gray-500 mb-6">Get started by creating your first project.</p>
                                        <a href="{{ route('admin.projects.create') }}" 
                                           class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                            </svg>
                                            Create Project
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Enhanced Modal untuk Detail Proyek --}}
        <div x-show="modalOpen" x-cloak 
             class="fixed inset-0 z-50 flex items-center justify-center p-4 overflow-y-auto"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            
            {{-- Latar belakang overlay --}}
            <div x-show="modalOpen" @click="modalOpen = false" 
                 class="fixed inset-0 bg-blur bg-opacity-50 backdrop-blur-sm"></div>

            {{-- Konten Modal --}}
            <div @click.stop 
                 class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl mx-auto z-10 transform max-h-[90vh] overflow-hidden"
                 x-show="modalOpen"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                
                <div x-if="selectedProject">
                    {{-- Modal Header --}}
                    <div class="px-8 py-6 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 x-text="selectedProject.name" class="text-2xl font-bold mb-2"></h3>
                                <div class="flex items-center space-x-4 text-blue-100">
                                    <span class="text-sm">Project ID: #<span x-text="selectedProject.id"></span></span>
                                    <span x-text="selectedProject.status" 
                                          class="px-3 py-1 bg-white bg-opacity-20 text-blue-500 rounded-full text-xs font-medium"></span>
                                </div>
                            </div>
                            <button @click="modalOpen = false" 
                                    class="text-white hover:text-gray-200 transition-colors duration-200">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Modal Body --}}
                    <div class="p-8 max-h-[60vh] overflow-y-auto">
                        {{-- Project Images --}}
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Project Gallery
                            </h4>
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                                <template x-if="selectedProject.images && selectedProject.images.length > 0">
                                    <template x-for="image in selectedProject.images" :key="image.id">
                                        <img :src="'/storage/' + image.path" :alt="selectedProject.name"
                                            class="rounded-lg object-cover w-full h-32">
                                    </template>
                                </template>
                                <template x-if="!selectedProject.images || selectedProject.images.length === 0">
                                    <p class="text-gray-500 italic col-span-full">No images available.</p>
                                </template>
                            </div>
                        </div>

                        {{-- Project Description --}}
                        <div class="mb-8">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Description
                            </h4>
                            <div class="bg-gray-50 rounded-xl p-6">
                                <p x-text="selectedProject.description || 'No description provided.'" 
                                   class="text-gray-700 leading-relaxed whitespace-pre-wrap"></p>
                            </div>
                        </div>
                        
                        {{-- Project Details Grid --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    Category
                                </h4>
                                <p x-text="selectedProject.category || 'Uncategorized'" class="text-gray-700 font-medium"></p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Status
                                </h4>
                                <p x-text="selectedProject.status" class="text-gray-700 font-medium"></p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0v-4m4-4h8m-4-4v8m-4 4h8"/>
                                    </svg>
                                    Start Date
                                </h4>
                                <p x-text="selectedProject.start_date ? new Date(selectedProject.start_date).toLocaleDateString('en-US', { day: 'numeric', month: 'long', year: 'numeric' }) : 'Not set'" 
                                   class="text-gray-700 font-medium"></p>
                            </div>
                            
                            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    End Date
                                </h4>
                                <p x-text="selectedProject.end_date ? new Date(selectedProject.end_date).toLocaleDateString('en-US', { day: 'numeric', month: 'long', year: 'numeric' }) : 'Not set'" 
                                   class="text-gray-700 font-medium"></p>
                            </div>
                            <div class="bg-gradient-to-br from-cyan-50 to-teal-50 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    By
                                </h4>
                                <p x-text="selectedProject.by" class="text-gray-700 font-medium"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="px-8 py-6 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            Last updated: <span class="font-medium">{{ now()->format('M d, Y') }}</span>
                        </div>
                        <div class="flex space-x-3">
                            <button @click="modalOpen = false" 
                                    class="px-6 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium rounded-lg transition-colors duration-200">
                                Close
                            </button>
                            <a :href="'/admin/projects/' + selectedProject.id + '/edit'" 
                               class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                                Edit Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection