@extends('layouts.admin')
@section('title', 'Tambah Event')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
  <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8 max-w-6xl">
    {{-- Header Section --}}
    <div class="mb-8">
      <div class="flex items-center gap-4 mb-4">
        <a href="{{ route('admin.events.index') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-600 hover:text-slate-900 hover:bg-white/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
          Kembali ke Daftar
        </a>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-2">
          Tambah Event Baru
        </h1>
        <p class="text-slate-600 text-lg">Buat event baru untuk organisasi Anda</p>
      </div>
    </div>

    {{-- Error Alert for Laravel Validation --}}
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
          Informasi Event
        </h3>
      </div>
      <div x-ignore class="p-8">
        <form id="event-form" action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
          @csrf
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Left Column - Main Information --}}
            <div class="lg:col-span-2 space-y-6">
              {{-- Event Title --}}
              <div class="space-y-2">
                <label for="title" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg>
                  Judul Event
                </label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Masukkan judul event..." class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('title') border-red-500 @enderror" required>
                @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Description --}}
              <div class="space-y-2">
                <label for="description" class="text-sm font-semibold text-slate-700">Deskripsi Event</label>
                <textarea id="description" name="description" placeholder="Jelaskan detail event, agenda, dan informasi penting lainnya..." class="w-full min-h-[200px] p-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm resize-none @error('description') border-red-500 @enderror" required>{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Location --}}
              <div class="space-y-2">
                <label for="location" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                  Lokasi Event
                </label>
                <input id="location" name="location" type="text" value="{{ old('location') }}" placeholder="Masukkan lokasi event..." class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('location') border-red-500 @enderror" required>
                @error('location')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- File Upload Section --}}
              <div class="space-y-2">
                <label for="image-upload" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                  Gambar Event
                </label>
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
                <input id="date" name="date" type="date" value="{{ old('date') }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('date') border-red-500 @enderror" required>
                @error('date')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>
              
              {{-- Time --}}
              <div class="space-y-2">
                <label for="time" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Waktu Event
                </label>
                <input id="time" name="time" type="time" value="{{ old('time') }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('time') border-red-500 @enderror" required>
                @error('time')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Status --}}
              <div class="space-y-2">
                <label for="status" class="text-sm font-semibold text-slate-700">Status Event</label>
                <select id="status" name="status" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('status') border-red-500 @enderror">
                    <option value="upcoming" {{ old('status', 'upcoming') == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                    <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                @error('status')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Info Card --}}
              <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                <div class="flex items-start space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-blue-600 mt-0.5"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                  <div class="text-sm text-blue-700">
                    <p class="font-semibold mb-1">Tips:</p>
                    <ul class="space-y-1 text-xs">
                      <li>• Pastikan tanggal dan waktu sudah benar</li>
                      <li>• Gunakan gambar dengan kualitas baik</li>
                      <li>• Deskripsi yang jelas membantu peserta</li>
                    </ul>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          {{-- Action Buttons --}}
          <div class="flex justify-end gap-4 pt-6 border-t border-slate-200">
             <a href="{{ route('admin.events.index') }}" class="inline-flex items-center justify-center px-8 py-3 border border-slate-300 text-sm font-medium rounded-md text-slate-700 bg-transparent hover:bg-slate-50">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
               Batal
             </a>
             <button type="submit" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-slate-900 to-blue-900 hover:from-slate-800 hover:to-blue-800 shadow-lg">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
               Simpan Event
             </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const dragDropArea = document.getElementById('drag-drop-area');
    const fileInput = document.getElementById('image-upload');
    const previewContainer = document.getElementById('image-preview-container');
    const uploadPrompt = document.getElementById('upload-prompt');
    
    const renderPreview = (file) => {
        const reader = new FileReader();
        reader.onload = (e) => {
            previewContainer.innerHTML = '';
            const previewWrapper = document.createElement('div');
            previewWrapper.className = 'relative group max-w-xs';
            const img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'w-full h-48 object-cover rounded-md border border-slate-200';
            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>';
            removeBtn.className = 'absolute top-2 right-2 bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity';
            removeBtn.addEventListener('click', () => {
                fileInput.value = '';
                uploadPrompt.classList.remove('hidden');
                previewContainer.classList.add('hidden');
            });
            previewWrapper.appendChild(img);
            previewWrapper.appendChild(removeBtn);
            previewContainer.appendChild(previewWrapper);
            
            uploadPrompt.classList.add('hidden');
            previewContainer.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    };

    const handleFile = (file) => {
        if (file && file.type.startsWith('image/')) {
            renderPreview(file);
        }
    };

    dragDropArea.addEventListener('drop', (e) => {
        e.preventDefault(); 
        e.stopPropagation();
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFile(files[0]);
        }
    });

    ['dragenter', 'dragover', 'dragleave'].forEach(eventName => {
        dragDropArea.addEventListener(eventName, (e) => {
            e.preventDefault(); 
            e.stopPropagation();
        });
    });
    
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            handleFile(e.target.files[0]);
        }
    });
});
</script>
@endpush