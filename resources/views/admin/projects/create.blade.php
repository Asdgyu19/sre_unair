@extends('layouts.admin')
@section('title', 'Tambah Program Kerja')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
  <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8 max-w-6xl">
    {{-- Header Section --}}
    <div class="mb-8">
      <div class="flex items-center gap-4 mb-4">
        <a href="{{ url('/admin/projects') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-600 hover:text-slate-900 hover:bg-white/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
          Kembali ke Daftar
        </a>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-2">
          Tambah Program Kerja Baru
        </h1>
        <p class="text-slate-600 text-lg">Buat program kerja baru untuk organisasi Anda</p>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="m6 14 1.45-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.55 6a2 2 0 0 1-1.94 1.5H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H18a2 2 0 0 1 2 2v2"/></svg>
          Informasi Program Kerja
        </h3>
      </div>
      <div x-ignore class="p-8">
        <form id="project-form" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
          @csrf
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Left Column - Main Information --}}
            <div class="lg:col-span-2 space-y-6">
              {{-- Project Name --}}
              <div class="space-y-2">
                <label for="name" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m6 14 1.45-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.55 6a2 2 0 0 1-1.94 1.5H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H18a2 2 0 0 1 2 2v2"/></svg>
                  Nama Program Kerja
                </label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Masukkan nama program kerja..." class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('name') border-red-500 @enderror" required>
                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Description --}}
              <div class="space-y-2">
                <label for="description" class="text-sm font-semibold text-slate-700">Deskripsi Program</label>
                <textarea id="description" name="description" placeholder="Jelaskan detail program kerja, tujuan, dan target yang ingin dicapai..." class="w-full min-h-[200px] p-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- File Upload Section --}}
              <div class="space-y-2">
                <label for="image-upload" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                  Gambar Program
                </label>
                <div id="drag-drop-area" class="relative border-2 border-dashed rounded-lg p-4 transition-all duration-200 border-slate-300 hover:border-slate-400 min-h-[150px] flex justify-center items-center">
                  <input type="file" id="image-upload" name="images[]" accept="image/*" multiple class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                  
                  <div id="image-preview-container" class="hidden w-full grid grid-cols-2 sm:grid-cols-3 gap-4">
                    {{-- Preview akan ditambahkan di sini oleh JS --}}
                  </div>

                  <div id="upload-prompt" class="text-center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="mx-auto h-12 w-12 text-slate-400 mb-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    <p class="text-sm text-slate-600 mb-1">
                      <b>Klik untuk memilih</b> atau <b>drag & drop</b> gambar
                    </p>
                    <p class="text-xs text-slate-500">Anda bisa memilih banyak gambar</p>
                  </div>
                </div>
                @error('images.*')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

            </div>

            {{-- Right Column - Additional Information --}}
            <div class="space-y-6">
              @php
                // Definisikan opsi untuk dropdowns
                $categoryOptions = ['social', 'academic', 'external', 'internal'];
                $byOptions = ['Research & Development', 'Competency Development', 'IT Development', 'Brand Marketing', 'Human Resource', 'External Relation', 'Funding'];
                $statusOptions = ['Belum Dimulai', 'Berjalan', 'Selesai', 'Ditunda', 'Dibatalkan'];
              @endphp

              {{-- Category --}}
              <div class="space-y-2">
                <label for="category" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.432 0l6.568-6.568a2.426 2.426 0 0 0 0-3.432l-8.704-8.704Z"/><circle cx="8" cy="8" r="1"/></svg>
                    Kategori
                </label>
                <select id="category" name="category" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('category') border-red-500 @enderror">
                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>Pilih Kategori</option>
                    @foreach ($categoryOptions as $option)
                        <option value="{{ $option }}" {{ old('category', 'internal') == $option ? 'selected' : '' }}>
                            {{ ucfirst($option) }}
                        </option>
                    @endforeach
                </select>
                @error('category')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>
              
              {{-- Departement --}}
              <div class="space-y-2">
                <label for="by" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Department
                </label>
                <select id="by" name="by" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('by') border-red-500 @enderror" required>
                    <option value="" disabled {{ old('by') ? '' : 'selected' }}>Pilih Penanggung Jawab</option>
                    @foreach ($byOptions as $option)
                        <option value="{{ $option }}" {{ old('by', 'IT Development') == $option ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @endforeach
                </select>
                @error('by')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>

              {{-- Status --}}
              <div class="space-y-2">
                <label for="status" class="text-sm font-semibold text-slate-700">Status Program</label>
                <select id="status" name="status" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('status') border-red-500 @enderror" required>
                    @foreach ($statusOptions as $option)
                        <option value="{{ $option }}" {{ old('status', 'Belum Dimulai') == $option ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @endforeach
                </select>
                @error('status')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
              </div>
              
              {{-- Date Range --}}
              <div class="grid grid-cols-1 gap-4">
                <div class="space-y-2">
                  <label for="start_date" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                    Tanggal Mulai
                  </label>
                  <input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('start_date') border-red-500 @enderror">
                  @error('start_date')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="space-y-2">
                  <label for="end_date" class="text-sm font-semibold text-slate-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                    Tanggal Selesai
                  </label>
                  <input id="end_date" name="end_date" type="date" value="{{ old('end_date') }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm @error('end_date') border-red-500 @enderror">
                  @error('end_date')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
              </div>
              
            </div>
          </div>

          {{-- Action Buttons --}}
          <div class="flex justify-end gap-4 pt-6 border-t border-slate-200">
             <a href="{{ url('/admin/projects') }}" class="inline-flex items-center justify-center px-8 py-3 border border-slate-300 text-sm font-medium rounded-md text-slate-700 bg-transparent hover:bg-slate-50">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
               Batal
             </a>
             <button type="submit" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-slate-900 to-blue-900 hover:from-slate-800 hover:to-blue-800 shadow-lg">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
               Simpan Program
             </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
{{-- Kode JavaScript untuk preview gambar tidak perlu diubah --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const dragDropArea = document.getElementById('drag-drop-area');
    const fileInput = document.getElementById('image-upload');
    const previewContainer = document.getElementById('image-preview-container');
    const uploadPrompt = document.getElementById('upload-prompt');
    const form = document.querySelector('#project-form');
    
    let fileStore = [];

    const renderPreviews = () => {
        previewContainer.innerHTML = '';
        if (fileStore.length > 0) {
            uploadPrompt.classList.add('hidden');
            previewContainer.classList.remove('hidden');
        } else {
            uploadPrompt.classList.remove('hidden');
            previewContainer.classList.add('hidden');
        }
        fileStore.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const previewWrapper = document.createElement('div');
                previewWrapper.className = 'relative group';
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-24 object-cover rounded-md border border-slate-200';
                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>';
                removeBtn.className = 'absolute top-1 right-1 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity';
                removeBtn.addEventListener('click', () => {
                    fileStore.splice(index, 1);
                    updateFileInput();
                    renderPreviews();
                });
                previewWrapper.appendChild(img);
                previewWrapper.appendChild(removeBtn);
                previewContainer.appendChild(previewWrapper);
            };
            reader.readAsDataURL(file);
        });
    };

    const handleFiles = (files) => {
        const newFiles = Array.from(files).filter(file => file.type.startsWith('image/'));
        fileStore.push(...newFiles);
        updateFileInput();
        renderPreviews();
    };

    const updateFileInput = () => {
        const dataTransfer = new DataTransfer();
        fileStore.forEach(file => {
            dataTransfer.items.add(file);
        });
        fileInput.files = dataTransfer.files;
    };

    dragDropArea.addEventListener('drop', (e) => {
        e.preventDefault(); e.stopPropagation();
        handleFiles(e.dataTransfer.files);
    });

    ['dragenter', 'dragover', 'dragleave'].forEach(eventName => {
        dragDropArea.addEventListener(eventName, (e) => {
            e.preventDefault(); e.stopPropagation();
        });
    });
    
    fileInput.addEventListener('change', (e) => {
        handleFiles(e.target.files);
    });

    // Panggil updateFileInput sekali lagi sebelum submit untuk jaminan
    if(form) {
        form.addEventListener('submit', function() {
            updateFileInput();
        });
    }
});
</script>
@endpush