@extends('layouts.app')

@section('title', 'Shop - SRE UNAIR')

@section('content')
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">All <span class="gradient-text">Merchandise</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Browse through our complete collection of eco-friendly merchandise.
            </p>
        </div>

        <!-- Merchandise Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($merchandise as $item)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                    <div class="relative">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $item->name }}</h3>
                        <p class="text-sm text-gray-500 mb-2">{{ $item->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-[#0E9671]">Rp{{ number_format($item->price, 0, ',', '.') }}</span>
                            <a href="https://api.whatsapp.com/send?phone=62895338089322&text={{ urlencode('Halo SRE UNAIR, saya ingin membeli merchandise: ' . $item->name . '. Mohon infonya ya, terima kasih!') }}"
                            target="_blank"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] transition">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="col-span-4 text-center text-gray-500">Belum ada merchandise tersedia.</p>
            @endforelse
        </div>
        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $merchandise->onEachSide(1)->links('vendor.pagination.tailwind') }}
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('merchandise') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                Back To Menu
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
