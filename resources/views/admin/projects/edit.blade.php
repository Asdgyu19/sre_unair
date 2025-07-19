@extends('layouts.admin')
@section('title', 'Edit Program Kerja: ' . $project->name)

@section('content')

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
  <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8 max-w-6xl">
    {{-- Header Section --}}
    <div class="mb-8">
      <div class="flex items-center gap-4 mb-4">
        <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-600 hover:text-slate-900 hover:bg-white/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
          Kembali ke Daftar
        </a>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-2">
          Edit Program Kerja
        </h1>
        <p class="text-slate-600 text-lg">Perbarui detail untuk program kerja <span class="font-semibold">{{ $project->name }}</span></p>
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
      <div class="p-8">
        <form id="project-form" action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
          @csrf
          @method('PUT')
          
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Left Column --}}
            <div class="lg:col-span-2 space-y-6">
              <div class="space-y-2">
                <label for="name" class="text-sm font-semibold text-slate-700">Nama Program Kerja</label>
                <input id="name" name="name" type="text" value="{{ old('name', $project->name) }}" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm" required>
              </div>

              <div class="space-y-2">
                <label for="description" class="text-sm font-semibold text-slate-700">Deskripsi Program</label>
                <textarea id="description" name="description" class="w-full min-h-[200px] p-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm resize-none">{{ old('description', $project->description) }}</textarea>
              </div>

              <div class="space-y-2">
                <label class="text-sm font-semibold text-slate-700">Gambar Program</label>
                <div id="gallery-container" class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                  {{-- Gambar yang sudah ada akan dirender oleh JavaScript --}}
                </div>
                <div id="drag-drop-area" class="relative border-2 border-dashed rounded-lg p-4 mt-4 transition-all duration-200 border-slate-300 hover:border-slate-400 min-h-[150px] flex justify-center items-center">
                  <input type="file" id="image-upload" name="images[]" accept="image/*" multiple class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                  <div id="upload-prompt" class="text-center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" class="mx-auto h-12 w-12 text-slate-400 mb-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    <p class="text-sm text-slate-600 mb-1"><b>Klik</b> atau <b>drag & drop</b> untuk menambah gambar baru</p>
                  </div>
                </div>
              </div>
            </div>

            {{-- Right Column --}}
            <div class="space-y-6">
              @php
                  $categoryOptions = ['social', 'academic', 'external', 'internal'];
                  $byOptions = ['Research & Development', 'Competency Development', 'IT Development', 'Brand Marketing', 'Human Resource', 'External Relation', 'Funding'];
                  $statusOptions = ['Belum Dimulai', 'Berjalan', 'Selesai', 'Ditunda', 'Dibatalkan'];
              @endphp

              <div class="space-y-2">
                  <label for="category" class="text-sm font-semibold text-slate-700">Kategori</label>
                  <select id="category" name="category" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm">
                      <option value="">Pilih Kategori</option>
                      @foreach ($categoryOptions as $option)
                          <option value="{{ $option }}" {{ old('category', $project->category) == $option ? 'selected' : '' }}>{{ ucfirst($option) }}</option>
                      @endforeach
                  </select>
              </div>

              <div class="space-y-2">
                  <label for="by" class="text-sm font-semibold text-slate-700">Department</label>
                  <select id="by" name="by" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm" required>
                       <option value="">Pilih Penanggung Jawab</option>
                       @foreach ($byOptions as $option)
                           <option value="{{ $option }}" {{ old('by', $project->by) == $option ? 'selected' : '' }}>{{ $option }}</option>
                       @endforeach
                   </select>
              </div>
              
              <div class="space-y-2">
                  <label for="status" class="text-sm font-semibold text-slate-700">Status Program</label>
                  <select id="status" name="status" class="w-full h-12 px-4 rounded-md border-slate-300 focus:border-blue-500 focus:ring-blue-500/20 shadow-sm" required>
                      @foreach ($statusOptions as $option)
                          <option value="{{ $option }}" {{ old('status', $project->status) == $option ? 'selected' : '' }}>{{ $option }}</option>
                      @endforeach
                  </select>
              </div>
              
              <div class="grid grid-cols-1 gap-4">
                  <div class="space-y-2">
                    <label for="start_date" class="text-sm font-semibold text-slate-700">Tanggal Mulai</label>
                    <input id="start_date" name="start_date" type="date" value="{{ old('start_date', $project->start_date ? \Carbon\Carbon::parse($project->start_date)->format('Y-m-d') : '') }}" class="w-full h-12 px-4 rounded-md border-slate-300 shadow-sm">
                  </div>
                  <div class="space-y-2">
                    <label for="end_date" class="text-sm font-semibold text-slate-700">Tanggal Selesai</label>
                    <input id="end_date" name="end_date" type="date" value="{{ old('end_date', $project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('Y-m-d') : '') }}" class="w-full h-12 px-4 rounded-md border-slate-300 shadow-sm">
                  </div>
              </div>
            </div>
          </div>

          {{-- Action Buttons --}}
          <div class="flex justify-end gap-4 pt-6 border-t border-slate-200">
             <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center justify-center px-8 py-3 border border-slate-300 text-sm font-medium rounded-md text-slate-700 bg-transparent hover:bg-slate-50">Batal</a>
            <button type="submit" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-slate-900 to-blue-900 hover:from-slate-800 hover:to-blue-800 shadow-lg">Simpan Perubahan</button>
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
    const fileInput = document.getElementById('image-upload');
    const galleryContainer = document.getElementById('gallery-container');
    const form = document.getElementById('project-form');

    // Data dari server
    let existingImages = @json($project->images->map(function($image) {
        return ['id' => $image->id, 'url' => asset('storage/' . $image->path)];
    }));
    
    // State untuk file
    let newFiles = []; // Menyimpan File object untuk file baru
    let imagesToDelete = []; // Menyimpan ID gambar lama yang akan dihapus

    // Fungsi utama untuk me-render semua preview
    const renderAllPreviews = () => {
        galleryContainer.innerHTML = ''; // Kosongkan galeri

        // Render gambar yang sudah ada
        existingImages.forEach(image => {
            const wrapper = document.createElement('div');
            wrapper.className = 'relative group';
            wrapper.innerHTML = `
                <img src="${image.url}" class="w-full h-24 object-cover rounded-md border border-slate-200">
                <button type="button" data-id="${image.id}" class="delete-existing-btn absolute top-1 right-1 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold opacity-0 group-hover:opacity-100">&times;</button>
            `;
            galleryContainer.appendChild(wrapper);
        });

        // Render preview untuk gambar baru
        newFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const wrapper = document.createElement('div');
                wrapper.className = 'relative group';
                wrapper.innerHTML = `
                    <img src="${e.target.result}" class="w-full h-24 object-cover rounded-md border-2 border-blue-400">
                    <button type="button" data-index="${index}" class="delete-new-btn absolute top-1 right-1 bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold">&times;</button>
                `;
                galleryContainer.appendChild(wrapper);
            };
            reader.readAsDataURL(file);
        });
    };

    // Event listener untuk menambah file baru
    const handleNewFiles = (files) => {
        newFiles.push(...Array.from(files).filter(f => f.type.startsWith('image/')));
        renderAllPreviews();
    };
    fileInput.addEventListener('change', (e) => handleNewFiles(e.target.files));

    // Event delegation untuk tombol hapus
    galleryContainer.addEventListener('click', function(e) {
        // Hapus gambar LAMA
        if (e.target.classList.contains('delete-existing-btn')) {
            const imageId = e.target.getAttribute('data-id');
            if (imageId && !imagesToDelete.includes(imageId)) {
                imagesToDelete.push(imageId);
            }
            // Hapus dari array tampilan dan render ulang
            existingImages = existingImages.filter(img => img.id != imageId);
            renderAllPreviews();
        }

        // Hapus gambar BARU (yang belum di-upload)
        if (e.target.classList.contains('delete-new-btn')) {
            const fileIndex = e.target.getAttribute('data-index');
            newFiles.splice(fileIndex, 1); // Hapus dari array file baru
            renderAllPreviews();
        }
    });

    // Menyiapkan data untuk dikirim saat form disubmit
    form.addEventListener('submit', function(e) {
        // 1. Tambahkan file baru ke input
        const dataTransfer = new DataTransfer();
        newFiles.forEach(file => dataTransfer.items.add(file));
        fileInput.files = dataTransfer.files;

        // 2. Tambahkan input hidden untuk gambar yang akan dihapus
        form.querySelectorAll('input[name="deleted_images[]"]').forEach(inp => inp.remove());
        imagesToDelete.forEach(id => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'deleted_images[]';
            input.value = id;
            form.appendChild(input);
        });
    });

    // Panggil render pertama kali saat halaman dimuat
    renderAllPreviews();
});
</script>
@endpush