@extends('layouts.app')

@section('title', 'About - SRE UNAIR')

@section('content')
<!-- About Section -->
<section id="about" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">About <span class="gradient-text">SRE UNAIR</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('assets/images/renewable-energy-illustration.png') }}" alt="About SRE UNAIR" class="rounded-lg shadow-xl w-full">
            </div>
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Society of Renewable Energy</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Society of Renewable Energy Universitas Airlangga (SRE UNAIR) is a student organization dedicated to promoting renewable energy awareness, research, and implementation within the university and broader community.
                </p>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Our mission is to educate, innovate, and advocate for sustainable energy solutions that address the global challenges of climate change and energy security.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl font-bold mb-2">10+</div>
                        <div class="text-gray-700">Projects Completed</div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl font-bold mb-2">500+</div>
                        <div class="text-gray-700">Active Members</div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl font-bold mb-2">20+</div>
                        <div class="text-gray-700">Events Organized</div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="text-blue-600 text-4xl font-bold mb-2">5+</div>
                        <div class="text-gray-700">Years of Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
