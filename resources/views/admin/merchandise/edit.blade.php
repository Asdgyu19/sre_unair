@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 pt-24">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Edit Merchandise</h1>
            <a href="{{ route('admin.merchandise.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Back To List
            </a>
        </div>

        <div class="bg-white shadow-lg rounded-lg">
            <form action="{{ route('admin.merchandise.update', $merchandise->id) }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Merchandise</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $merchandise->name) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('name') border-red-500 @enderror" required>
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
                        <input type="number" name="price" id="price" value="{{ old('price', $merchandise->price) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('price') border-red-500 @enderror" required>
                        @error('price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="stock" class="block text-sm font-medium text-gray-700 mb-2">Stok</label>
                        <input type="number" name="stock" id="stock" value="{{ old('stock', $merchandise->stock) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('stock') border-red-500 @enderror" required>
                        @error('stock')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('description') border-red-500 @enderror" required>{{ old('description', $merchandise->description) }}</textarea>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                        <input type="text" name="category" id="category" value="{{ old('category', $merchandise->category) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('category') border-red-500 @enderror">
                        @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select name="status" id="status" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('status') border-red-500 @enderror" required>
                            <option value="available" {{ old('status', $merchandise->status) == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="unavailable" {{ old('status', $merchandise->status) == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                        @error('status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                        @if($merchandise->image)
                            <img src="{{ asset($merchandise->image) }}" alt="Current Image" class="mb-2 w-40 h-40 object-cover rounded">
                        @endif
                        <input type="file" name="image" id="image" accept="image/*"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm @error('image') border-red-500 @enderror">
                        @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-3 mt-6">
                    <a href="{{ route('admin.merchandise.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition-colors">Cancel</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
