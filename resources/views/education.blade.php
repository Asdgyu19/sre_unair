@extends('layouts.app')

@section('title', 'Education - SRE UNAIR')

@section('content')
<!-- Education Section -->
<section id="education" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Discover our <span class="gradient-text">Curriculum</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Explore our curriculum designed to build knowledge and skills about SRE and renewable energy.
            </p>
        </div>
        <!-- Static Curriculum Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Card Header -->
            <div class="bg-[#0E9671] px-6 py-4">
                <h3 class="text-white text-lg font-semibold">Curriculum Program</h3>
            </div>
            <!-- Card Content -->
            <div class="px-6 py-6 bg-white border border-t-0 border-white">
                <img src="{{ asset('assets/images/curriculum.png') }}" alt="Curriculum Image" class="w-full rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>
<!-- LMS Link Section -->
<section class="w-full bg-[#0E9671] py-20 mb-16">
    <div class="max-w-4xl mx-auto text-center text-white mb-6">
        <h3 class="text-xl font-bold">Access our curriculum through the LMS platform below.</h3>
    </div>
    <!-- LMS Link Bar -->
    <div class="flex justify-center">
        <a href="https://sre-hireidn.com" target="_blank"
        class="flex items-center w-full max-w-md bg-white border border-white rounded-xl px-4 py-2 shadow-md transition hover:shadow-lg focus:outline-none">    
        <span class="text-lg font-mono text-gray-800">https://sre-hireidn.com</span>
            <div class="ml-auto text-gray-800">
                <!-- Book Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6l-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h4l2-2m0-12h6a2 2 0 012 2v12a2 2 0 01-2 2h-6m0-16v16" />
                </svg>
            </div>
        </a>
    </div>
  </section>  
@endsection
