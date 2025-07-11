@extends('layouts.app')

@section('title', 'Create Event')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold mb-6">Create New Event</h2>

    <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="title" class="block font-medium">Title</label>
            <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full border rounded px-3 py-2" required></textarea>
        </div>

        <div class="mb-4">
            <label for="date" class="block font-medium">Date</label>
            <input type="date" name="date" id="date" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="time" class="block font-medium">Time</label>
            <input type="time" name="time" id="time" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="location" class="block font-medium">Location</label>
            <input type="text" name="location" id="location" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block font-medium">Status</label>
            <select name="status" id="status" class="w-full border rounded px-3 py-2" required>
                <option value="upcoming">Upcoming</option>
                <option value="ongoing">Ongoing</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="image" class="block font-medium">Upload Image</label>
            <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save Event</button>
    </form>
</div>
@endsection
