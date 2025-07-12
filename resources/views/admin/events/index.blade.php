@extends('layouts.app')

@section('title', 'Manage Events')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Event Management</h2>

    <a href="{{ route('admin.events.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700">+ Add Event</a>

    @foreach ($events as $event)
    <div class="bg-white shadow rounded p-4 mb-4 flex justify-between items-center">
        <div>
            <h3 class="text-lg font-bold">{{ $event->title }}</h3>
            <p class="text-sm text-gray-500">{{ $event->start_date }} - {{ $event->location }}</p>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('admin.events.edit', $event->id) }}" class="text-blue-600 hover:underline">Edit</a>
            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
    @endforeach

    <div class="mt-6">
        {{ $events->links() }}
    </div>
</div>
@endsection
