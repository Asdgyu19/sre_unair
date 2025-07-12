@extends('layouts.app')

@section('title', 'Edit Event')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold mb-6">Edit Event</h2>

    <form method="POST" action="{{ route('admin.events.update', $event->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2" value="{{ $event->title }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border rounded px-3 py-2" required>{{ $event->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="date" class="block font-medium">Start Date</label>
            <input type="date" name="date" id="date" class="w-full border rounded px-3 py-2" value="{{ $event->start_date }}" required>
        </div>

        <div class="mb-4">
            <label for="location" class="block font-medium">Location</label>
            <input type="text" name="location" id="location" class="w-full border rounded px-3 py-2" value="{{ $event->location }}">
        </div>

        <div class="mb-4">
            <label for="status" class="block font-medium">Status</label>
            <select name="status" id="status" class="w-full border rounded px-3 py-2" required>
                <option value="upcoming" {{ $event->status === 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                <option value="ongoing" {{ $event->status === 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="completed" {{ $event->status === 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $event->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>


        <div class="mb-4">
            <label for="featured_image" class="block font-medium">Current Image</label>
            @if ($event->featured_image)
                <img src="{{ asset('storage/' . $event->featured_image) }}" alt="{{ $event->title }}" class="mb-2 w-64 rounded">
            @endif
            <input type="file" name="featured_image" id="featured_image" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update Event</button>
    </form>
</div>
@endsection
