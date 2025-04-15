@extends('layouts.app')

@section('title', 'Events - SRE UNAIR')

@section('content')
<!-- Events Section -->
<section id="events" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Upcoming <span class="gradient-text">Events</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Join us for exciting events, workshops, and seminars focused on renewable energy and sustainability.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('images/event-1.jpg') }}" alt="Renewable Energy Workshop" class="w-full h-48 object-cover">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                        Upcoming
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        June 15, 2023 | 09:00 AM
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Renewable Energy Workshop</h3>
                    <p class="text-gray-700 mb-4">
                        Learn about the latest technologies in renewable energy and how to implement them in your daily life.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        UNAIR Campus B, Room 301
                    </div>
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        Register Now
                    </a>
                </div>
            </div>
            
            <!-- Event Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('images/event-2.jpg') }}" alt="Solar Energy Seminar" class="w-full h-48 object-cover">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                        Upcoming
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        July 5, 2023 | 13:00 PM
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Solar Energy Seminar</h3>
                    <p class="text-gray-700 mb-4">
                        Discover the potential of solar energy and how it can revolutionize our energy consumption patterns.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        UNAIR Auditorium
                    </div>
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        Register Now
                    </a>
                </div>
            </div>
            
            <!-- Event Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('images/event-3.jpg') }}" alt="Green Technology Exhibition" class="w-full h-48 object-cover">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                        Upcoming
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        August 20, 2023 | 10:00 AM
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Green Technology Exhibition</h3>
                    <p class="text-gray-700 mb-4">
                        Explore innovative green technologies and sustainable solutions at our annual exhibition.
                    </p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Surabaya Convention Center
                    </div>
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                View All Events
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
