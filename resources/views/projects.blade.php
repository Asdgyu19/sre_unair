@extends('layouts.app')

@section('title', 'Projects - SRE UNAIR')

@section('content')
    <div x-data="{ isModalOpen: false, project: {}, currentImageIndex: 0, imageOrientation: 'landscape' }">
        
        <section id="projects" class="py-16 md:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our <span class="gradient-text">Projects</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Explore our innovative renewable energy projects that are making a difference in our community.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($projects as $project)
                        <div
                            class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col">
                            {{-- Project Image --}}
                            <div class="relative h-64 w-full overflow-hidden">
                                <img src="{{ $project->images->isNotEmpty() ? asset('storage/' . $project->images->first()->path) : 'https://via.placeholder.com/400x300.png?text=No+Image' }}"
                                    alt="{{ $project->name }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                                {{-- Status Badge --}}
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full backdrop-blur-sm
                                        {{ $project->status == 'Berjalan'
                                            ? 'bg-green-100/90 text-green-800 border border-green-200'
                                            : ($project->status == 'Selesai'
                                                ? 'bg-blue-100/90 text-blue-800 border border-blue-200'
                                                : 'bg-gray-100/90 text-gray-800 border border-gray-200') }}">
                                        @if ($project->status == 'Berjalan')
                                            <svg class="w-2 h-2 mr-1 fill-current" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3" />
                                            </svg>
                                        @endif
                                        {{ $project->status }}
                                    </span>
                                </div>

                                {{-- Category Tag --}}
                                @if ($project->category)
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="inline-flex items-center px-2 py-1 text-xs font-medium bg-white/90 text-gray-700 rounded-lg backdrop-blur-sm">
                                            {{ $project->category }}
                                        </span>
                                    </div>
                                @endif

                                {{-- Overlay Gradient --}}
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>

                            {{-- Project Content --}}
                            <div class="p-6 flex-grow flex flex-col">
                                <div class="flex-grow">
                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-200">
                                        {{ $project->name }}
                                    </h3>

                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                        {{ \Illuminate\Support\Str::limit($project->description, 120) }}
                                    </p>

                                    {{-- Project Meta --}}
                                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                                        @if ($project->start_date)
                                            <div class="flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0v-4m4-4h8m-4-4v8m-4 4h8" />
                                                </svg>
                                                {{ \Carbon\Carbon::parse($project->start_date)->format('M Y') }}
                                            </div>
                                        @endif

                                        @if ($project->images->count() > 1)
                                            <div class="flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $project->images->count() }} photos
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Action Button --}}
                                <button type="button"
                                    @click="isModalOpen = true; project = {{ Js::from($project) }}; currentImageIndex = 0"
                                    class="group/btn w-full flex items-center justify-center px-4 py-3 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                    <span class="mr-2">View Details</span>
                                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="lg:col-span-3 text-center py-20">
                            <div class="max-w-md mx-auto">
                                <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Projects Yet</h3>
                                <p class="text-gray-600">We're working on exciting new renewable energy projects. Check back
                                    soon!</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        {{-- Enhanced Modal --}}
        <div x-show="isModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            @keydown.escape.window="isModalOpen = false" style="display: none;"
            class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center p-4">

            <div @click.away="isModalOpen = false" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="bg-white rounded-2xl shadow-2xl max-w-5xl w-full max-h-[90vh] flex flex-col overflow-hidden">

                {{-- Modal Header --}}
                <div class="flex justify-between items-center p-6 bg-gradient-to-r from-green-600 to-blue-600 text-white">
                    <div>
                        <h3 x-text="project.name" class="text-2xl font-bold mb-1"></h3>
                        <div class="flex items-center space-x-4 text-green-100">
                            <span x-text="project.category" class="text-sm font-medium"></span>
                            <span class="w-1 h-1 bg-green-200 rounded-full"></span>
                            <span x-text="project.status" class="text-sm font-medium"></span>
                        </div>
                    </div>
                    <button @click="isModalOpen = false"
                        class="text-white/80 hover:text-white hover:bg-white/10 rounded-full p-2 transition-all duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- Modal Body --}}
                <div class="p-4 sm:p-6 overflow-y-auto flex-1">   
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 lg:gap-8">

                        <div class="lg:col-span-3">
                            <div x-show="project.images && project.images.length > 0" class="relative w-full">
                                {{-- Kontainer Gambar Dinamis --}}
                                <div class="w-full overflow-hidden rounded-xl bg-black/10 flex justify-center items-center transition-all duration-300"
                                    :class="imageOrientation === 'landscape' ? 'aspect-video' : 'aspect-[4/5]'">
                                    <img :src="`/storage/${project.images[currentImageIndex].path}`"
                                        :alt="project.name"
                                        @load="imageOrientation = $el.naturalWidth >= $el.naturalHeight ? 'landscape' : 'portrait'"
                                        class="w-full h-full object-contain">
                                </div>
                                
                                {{-- Navigasi & Counter --}}
                                <div x-show="project.images.length > 1">
                                    <button @click="currentImageIndex = (currentImageIndex - 1 + project.images.length) % project.images.length"
                                        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-200">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                                    </button>
                                    <button @click="currentImageIndex = (currentImageIndex + 1) % project.images.length"
                                        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-200">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                    </button>
                                    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black/70 text-white text-sm px-3 py-1 rounded-full backdrop-blur-sm">
                                        <span x-text="currentImageIndex + 1"></span> / <span x-text="project.images.length"></span>
                                    </div>
                                </div>
                                
                                {{-- Navigasi Thumbnail --}}
                                <div x-show="project.images.length > 1" class="flex justify-center mt-4 space-x-2 overflow-x-auto pb-2">
                                    <template x-for="(image, index) in project.images" :key="index">
                                        <button @click="currentImageIndex = index"
                                            class="flex-shrink-0 w-16 h-16 rounded-lg overflow-hidden border-2 transition-all duration-200"
                                            :class="currentImageIndex === index ? 'border-green-500 shadow-md' : 'border-gray-200 hover:border-gray-300'">
                                            <img :src="`/storage/${image.path}`" :alt="`Thumbnail ${index + 1}`" class="w-full h-full object-cover">
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="flex flex-col space-y-6">
                                {{-- Project Details Sidebar --}}
                                <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-xl p-5">
                                    <h4 class="font-semibold text-gray-900 mb-4 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        Project Details
                                    </h4>
                                    <div class="space-y-4">
                                        <div class="flex justify-between items-center py-2 border-b border-gray-200/80"><span class="text-sm font-medium text-gray-600">Status</span><span x-text="project.status" class="px-2 py-1 text-xs font-semibold rounded-full" :class="project.status === 'Berjalan' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800'"></span></div>
                                        <div class="flex justify-between items-center py-2 border-b border-gray-200/80"><span class="text-sm font-medium text-gray-600">Category</span><span x-text="project.category || 'N/A'" class="text-sm text-gray-900 font-medium capitalize"></span></div>
                                        <div x-show="project.by" class="flex justify-between items-center py-2 border-b border-gray-200/80"><span class="text-sm font-medium text-gray-600">By</span><span x-text="project.by" class="text-sm text-gray-900 font-medium"></span></div>
                                    </div>
                                </div>

                                {{-- Timeline --}}
                                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-5">
                                    <h4 class="font-semibold text-gray-900 mb-4 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        Timeline
                                    </h4>
                                    <div class="space-y-3">
                                        <div class="flex items-center"><div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div><div><div class="text-xs text-gray-600">Start Date</div><div x-text="project.start_date ? new Date(project.start_date).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) : 'Not specified'" class="text-sm font-medium text-gray-900"></div></div></div>
                                        <div class="flex items-center"><div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div><div><div class="text-xs text-gray-600">End Date</div><div x-text="project.end_date ? new Date(project.end_date).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) : 'Ongoing'" class="text-sm font-medium text-gray-900"></div></div></div>
                                    </div>
                                </div>

                                {{-- Main Content --}}
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                        Project Description
                                    </h4>
                                    <div x-html="project.description?.replace(/\n/g, '<br>') || 'No description available.'" 
                                        class="text-gray-700 leading-relaxed prose max-w-none bg-white rounded-xl p-5 shadow-sm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Modal Footer --}}
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                    <div class="text-sm text-gray-500">
                        <span class="font-medium">Last updated:</span> {{ now()->format('M d, Y') }}
                    </div>
                    <button @click="isModalOpen = false"
                        class="px-6 py-2 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
