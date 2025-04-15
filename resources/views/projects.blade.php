@extends('layouts.app')

@section('title', 'Projects - SRE UNAIR')

@section('content')
<!-- Projects Section -->
<section id="projects" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our <span class="gradient-text">Projects</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Explore our innovative renewable energy projects that are making a difference in our community.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/project-1.jpg') }}" alt="Solar Panel Installation" class="w-full h-56 object-cover">
                <div class="p-6">
                    <div class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-3">
                        Solar Energy
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Campus Solar Panel Installation</h3>
                    <p class="text-gray-700 mb-4">
                        Installation of solar panels on campus buildings to reduce energy consumption and promote renewable energy.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Project Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/project-2.jpg') }}" alt="Wind Turbine Research" class="w-full h-56 object-cover">
                <div class="p-6">
                    <div class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-semibold mb-3">
                        Wind Energy
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Small-Scale Wind Turbine Research</h3>
                    <p class="text-gray-700 mb-4">
                        Research and development of small-scale wind turbines suitable for urban environments and coastal areas.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Project Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/project-3.jpg') }}" alt="Biofuel Production" class="w-full h-56 object-cover">
                <div class="p-6">
                    <div class="inline-block px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-semibold mb-3">
                        Bioenergy
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sustainable Biofuel Production</h3>
                    <p class="text-gray-700 mb-4">
                        Development of sustainable biofuel production methods using agricultural waste and algae cultivation.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                View All Projects
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
