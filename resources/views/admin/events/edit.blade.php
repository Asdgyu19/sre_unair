@extends('layouts.admin')
@section('title', 'Edit Event')

@section('content')
    {{-- Header Section with Gradient Background --}}
    <div class="bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 rounded-2xl p-8 mb-8 shadow-2xl">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold text-white mb-2">Edit Event</h1>
                <p class="text-blue-100 text-lg">Update the details for "{{ $event->title }}"</p>
            </div>
            <div class="hidden md:block">
                <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Form Container --}}
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
    {{-- Error Messages --}}
    @if ($errors->any())
    <div class="mb-6 border border-red-200 bg-red-50 rounded-lg p-4" role="alert">
        <strong class="font-bold text-red-800">Oops! Terjadi kesalahan.</strong>
        <ul class="mt-2 list-disc list-inside text-sm text-red-700">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Main Form --}}
    <div class="shadow-xl border-0 bg-white/80 backdrop-blur-sm rounded-lg">
      <div class="bg-gradient-to-r from-slate-900 to-blue-900 text-white rounded-t-lg px-8 py-5">
        <h3 class="text-xl font-semibold flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
          Edit Informasi Event
        </h3>
      </div>
      <div x-ignore class="p-8">
        <form id="event-form" action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
          @csrf
          @method('PUT')
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Left Column - Main Information --}}
            <div class="lg:col-span-2 space-y-6">
              {{-- Event Title --}}
              <div class="space-y-2">
                <label for="title" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                  Judul Event
                </label>
                <input id="title" name="title" type="text" value="{{ old('title', $event->title) }}" placeholder="Masukkan judul event..." class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('title') border-red-500 @enderror" required>
                @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Description --}}
              <div class="space-y-2">
                <label for="description" class="text-sm font-semibold text-slate-700">Deskripsi Event</label>
                <textarea id="description" name="description" placeholder="Jelaskan detail event, agenda, dan informasi penting lainnya..." class="w-full min-h-[200px] p-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm resize-none @error('description') border-red-500 @enderror" required>{{ old('description', $event->description) }}</textarea>
                @error('description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Location --}}
              <div class="space-y-2">
                <label for="location" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                  Lokasi Event
                </label>
                <input id="location" name="location" type="text" value="{{ old('location', $event->location) }}" placeholder="Masukkan lokasi event..." class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('location') border-red-500 @enderror" required>
                @error('location')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- File Upload Section --}}
              <div class="space-y-2">
                <label for="image-upload" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                  Gambar Event
                </label>
                
                @if($event->image)
                <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $event->image) }}" alt="Current event image" class="w-32 h-32 object-cover rounded-lg border border-gray-300">
                </div>
                @endif
                
                <div id="drag-drop-area" class="relative border-2 border-dashed rounded-lg p-4 transition-all duration-200 border-slate-300 hover:border-slate-400 min-h-[150px] flex justify-center items-center">
                  <input type="file" id="image-upload" name="image" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                  
                  <div id="image-preview-container" class="hidden w-full flex justify-center">
                    {{-- Preview akan ditambahkan di sini oleh JS --}}
                  </div>

                  <div id="upload-prompt" class="text-center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="mx-auto h-12 w-12 text-slate-400 mb-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    <p class="text-sm text-slate-600 mb-1">
                      <b>Klik untuk memilih</b> atau <b>drag & drop</b> gambar
                    </p>
                    <p class="text-xs text-slate-500">Format: JPG, PNG, GIF (Max 2MB)</p>
                  </div>
                </div>
                @error('image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

            </div>

            {{-- Right Column - Schedule Information --}}
            <div class="space-y-6">
              {{-- Date --}}
              <div class="space-y-2">
                <label for="date" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                    Tanggal Event
                </label>
                <input id="date" name="date" type="date" value="{{ old('date', \Carbon\Carbon::parse($event->date)->format('Y-m-d')) }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('date') border-red-500 @enderror" required>
                @error('date')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>
              
              {{-- Time --}}
              <div class="space-y-2">
                <label for="time" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Waktu Event
                </label>
                    <input id="time" name="time" type="time" value="{{ old('time', \Carbon\Carbon::parse($event->time)->format('H:i')) }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('time') border-red-500 @enderror" required>
                @error('time')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Status --}}
              <div class="space-y-2">
                <label for="status" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    Status Event
                </label>
                <select id="status" name="status" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('status') border-red-500 @enderror" required>
                    <option value="upcoming" {{ old('status', $event->status) == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                    <option value="ongoing" {{ old('status', $event->status) == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option value="completed" {{ old('status', $event->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ old('status', $event->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                @error('status')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

            </div>
          </div>

          {{-- Action Buttons --}}

          {{-- Action Buttons --}}
          <div class="flex gap-4 pt-8 border-t border-slate-200">
            <a href="{{ route('admin.events.index') }}" 
               class="flex-1 sm:flex-initial px-8 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700 font-semibold rounded-lg transition-all duration-200 text-center">
              Batal
            </a>
            <button type="submit" 
                    class="flex-1 sm:flex-initial px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M20 6L9 17l-5-5"/></svg>
              Update Event
            </button>
          </div>
        </form>
      </div>
    </div>
</div>

{{-- JavaScript for Image Upload --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('image-upload');
    const dragDropArea = document.getElementById('drag-drop-area');
    const uploadPrompt = document.getElementById('upload-prompt');
    const previewContainer = document.getElementById('image-preview-container');

    // Handle file selection via input
    fileInput.addEventListener('change', handleFile);

    // Handle drag and drop
    dragDropArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        dragDropArea.classList.add('border-blue-400', 'bg-blue-50');
    });

    dragDropArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        dragDropArea.classList.remove('border-blue-400', 'bg-blue-50');
    });

    dragDropArea.addEventListener('drop', function(e) {
        e.preventDefault();
        dragDropArea.classList.remove('border-blue-400', 'bg-blue-50');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFile();
        }
    });

    function handleFile() {
        const file = fileInput.files[0];
        if (!file) return;

        // Validate file type
        if (!file.type.startsWith('image/')) {
            alert('Please select a valid image file.');
            return;
        }

        // Validate file size (max 2MB)
        if (file.size > 2 * 1024 * 1024) {
            alert('File size must be less than 2MB.');
            return;
        }

        // Show preview
        const reader = new FileReader();
        reader.onload = function(e) {
            uploadPrompt.classList.add('hidden');
            previewContainer.classList.remove('hidden');
            
            previewContainer.innerHTML = `
                <div class="relative">
                    <img src="${e.target.result}" alt="Preview" class="max-w-full max-h-48 rounded-lg shadow-sm">
                    <button type="button" onclick="clearPreview()" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm hover:bg-red-600">
                        ×
                    </button>
                </div>
            `;
        };
        reader.readAsDataURL(file);
    }

    // Global function to clear preview
    window.clearPreview = function() {
        fileInput.value = '';
        uploadPrompt.classList.remove('hidden');
        previewContainer.classList.add('hidden');
        previewContainer.innerHTML = '';
    };
});
</script>
@endsection