@extends('layouts.app')

@section('title', 'Merchandise - SRE UNAIR')

@section('content')
<section id="merchandise" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our <span class="gradient-text">Merchandise</span></h2>
            <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div> {{-- Menggunakan warna hijau konsisten --}}
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Explore our collection of sustainable and eco-friendly merchandise.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> {{-- Menggunakan 3 kolom untuk konsistensi --}}
            @forelse ($merchandise as $item)
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col">
                    {{-- Item Image --}}
                    <div class="relative h-64 w-full overflow-hidden">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/400x300.png?text=No+Merch+Image' }}"
                            alt="{{ $item->name ?? 'Merchandise Item' }}" {{-- Tambahkan ?? '' --}}
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                        {{-- Status Badge (Available/Unavailable) --}}
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full backdrop-blur-sm
                                @if(($item->status ?? '') == 'available') {{-- Tambahkan ?? '' --}}
                                    bg-green-100/90 text-green-800 border border-green-200
                                @else {{-- unavailable --}}
                                    bg-red-100/90 text-red-800 border border-red-200
                                @endif">
                                @if(($item->status ?? '') == 'available') {{-- Tambahkan ?? '' --}}
                                    <svg class="w-2 h-2 mr-1 fill-current" viewBox="0 0 8 8"><circle cx="4" cy="4" r="3" /></svg>
                                @else
                                    <svg class="w-2 h-2 mr-1 fill-current" viewBox="0 0 8 8"><circle cx="4" cy="4" r="3" /></svg>
                                @endif
                                {{ ucfirst($item->status ?? 'Unknown') }} {{-- Tambahkan ?? '' --}}
                            </span>
                        </div>

                        {{-- Category Tag --}}
                        @if ($item->category)
                            <div class="absolute top-4 left-4">
                                <span
                                    class="inline-flex items-center px-2 py-1 text-xs font-medium bg-white/90 text-gray-700 rounded-lg backdrop-blur-sm">
                                    {{ $item->category ?? 'N/A' }} {{-- Tambahkan ?? '' --}}
                                </span>
                            </div>
                        @endif

                        {{-- Overlay Gradient --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    {{-- Item Content --}}
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex-grow">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-200">
                                {{ $item->name ?? 'No Name' }} {{-- Tambahkan ?? '' --}}
                            </h3>

                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ \Illuminate\Support\Str::limit($item->description ?? 'No description provided.', 120) }} {{-- Tambahkan ?? '' --}}
                            </p>

                            {{-- Price and Stock --}}
                            <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                                <span class="text-xl font-bold text-green-600">Rp{{ number_format($item->price ?? 0, 0, ',', '.') }}</span> {{-- Tambahkan ?? 0 --}}
                                <span class="text-sm text-gray-700">Stock: {{ $item->stock ?? 0 }}</span> {{-- Tambahkan ?? 0 --}}
                            </div>
                        </div>

                        {{-- Action Button --}}
                        <a href="https://api.whatsapp.com/send?phone=62895338089322&text={{ urlencode('Halo SRE UNAIR, saya ingin membeli merchandise: ' . ($item->name ?? 'Unknown Item') . '. Mohon infonya ya, terima kasih!') }}"
                            target="_blank"
                            class="group/btn w-full flex items-center justify-center px-4 py-3 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                            <span class="mr-2">Buy Now</span>
                            <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="lg:col-span-3 text-center py-20">
                    <div class="max-w-md mx-auto">
                        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">No Merchandise Available Yet</h3>
                        <p class="text-gray-600">We're preparing exciting new items. Check back soon!</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('merchandise') }}" {{-- Menggunakan route('merchandise') untuk link "Shop All" --}}
               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-medium rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                Shop All Merchandise
                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection