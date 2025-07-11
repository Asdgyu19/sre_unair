@extends('layouts.app')

@section('title', 'Events - SRE UNAIR')

@section('content')
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
            @forelse ($events as $event)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                        {{ ucfirst($event->status) }}
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <svg class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $event->title }}</h3>
                    <p class="text-gray-700 mb-4">{{ $event->description }}</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $event->location }}
                    </div>
                    @if ($event->registration_link)
                        <a href="{{ $event->registration_link }}" target="_blank" class="inline-flex items-center px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 text-sm font-medium rounded-md">
                            Register Now
                        </a>
                    @endif
                </div>
            </div>
            @empty
            <p class="col-span-3 text-center text-gray-500">No events available.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
