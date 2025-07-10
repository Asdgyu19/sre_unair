@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Merchandise Management</h1>
            <a href="{{ route('admin.merchandise.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Item
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($merchandise as $item)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-image text-gray-500 text-4xl"></i>
                </div>
                @endif
                
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $item->name }}</h3>
                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($item->description, 80) }}</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xl font-bold text-green-600">${{ number_format($item->price, 2) }}</span>
                        <span class="text-sm text-gray-500">Stock: {{ $item->stock }}</span>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">{{ $item->category }}</span>
                        <span class="px-2 py-1 text-xs font-medium rounded-full 
                            @if($item->status == 'active') bg-green-100 text-green-800
                            @else bg-red-100 text-red-800 @endif">
                            {{ ucfirst($item->status) }}
                        </span>
                    </div>
                    
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.merchandise.edit', $item) }}" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-3 rounded-md text-sm transition-colors">
                            Edit
                        </a>
                        <form action="{{ route('admin.merchandise.destroy', $item) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-3 rounded-md text-sm transition-colors">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-shopping-bag text-gray-400 text-6xl mb-4"></i>
                <p class="text-gray-500 text-lg">No merchandise found</p>
                <a href="{{ route('admin.merchandise.create') }}" class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md transition-colors">
                    Add First Item
                </a>
            </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $merchandise->links() }}
        </div>
    </div>
</div>
@endsection
