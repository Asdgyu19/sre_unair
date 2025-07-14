@extends('layouts.app')

@section('title', 'Merchandise - SRE UNAIR')

@section('content')
<!-- Merchandise Section -->
<section id="merchandise" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our <span class="gradient-text">Merchandise</span></h2>
            <div class="mt-2 h-1 w-20 bg-blue-500 mx-auto"></div>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Explore our collection of sustainable and eco-friendly merchandise.
            </p>
        </div>

        <!-- Merchandise Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @forelse ($merchandise as $item)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="relative">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                            class="w-full h-64 object-cover">
                        <div
                            class="absolute top-0 right-0 bg-[#F0C93D] text-[#7E6500] px-3 py-1 m-2 rounded-full text-sm font-semibold">
                            New
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item->name }}</h3> {{-- Perbaikan di sini --}}
                        <p class="text-gray-700 mb-4">
                            {{ $item->description }}
                        </p>
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

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <a href="{{ route('shop') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                Shop All Merchandise
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .transform-3d {
        transform-style: preserve-3d;
    }
    
    /* Grid line styles */
    .grid-line-horizontal {
        position: absolute;
        left: -40px;
        height: 1px;
        width: calc(100% + 80px);
        background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 50%, transparent 0, transparent);
        background-size: 5px 1px;
        z-index: 30;
    }
    
    .grid-line-vertical {
        position: absolute;
        top: -40px;
        height: calc(100% + 80px);
        width: 1px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 50%, transparent 0, transparent);
        background-size: 1px 5px;
        z-index: 30;
    }
    
    .dark .grid-line-horizontal,
    .dark .grid-line-vertical {
        background: linear-gradient(to right, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2) 50%, transparent 0, transparent);
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/motion/dist/motion.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // This is where you'll add your merchandise images
        const merchandiseImages = [
            // Add your image paths here, for example:
            "{{ asset('images/merchandise/item1.jpg') }}",
            "{{ asset('images/merchandise/item2.jpg') }}",
            "{{ asset('images/merchandise/item3.jpg') }}",
            // Add more images as needed
        ];
        
        // Initialize the 3D marquee
        initMerchandiseMarquee(merchandiseImages);
    });
    
    function initMerchandiseMarquee(images) {
        const marqueeContainer = document.getElementById('merchandise-marquee');
        
        // Create the main container
        const container = document.createElement('div');
        container.className = 'flex size-full items-center justify-center';
        
        // Create the inner container
        const innerContainer = document.createElement('div');
        innerContainer.className = 'size-[1720px] shrink-0 scale-50 sm:scale-75 lg:scale-100';
        
        // Create the grid container
        const gridContainer = document.createElement('div');
        gridContainer.className = 'relative top-96 right-[50%] grid size-full origin-top-left grid-cols-4 gap-8 transform-3d';
        gridContainer.style.transform = 'rotateX(55deg) rotateY(0deg) rotateZ(-45deg)';
        
        // Split images into 4 columns
        const chunkSize = Math.ceil(images.length / 4);
        const chunks = Array.from({ length: 4 }, (_, colIndex) => {
            const start = colIndex * chunkSize;
            return images.slice(start, start + chunkSize);
        });
        
        // Create columns
        chunks.forEach((subarray, colIndex) => {
            const column = document.createElement('div');
            column.className = 'flex flex-col items-start gap-8';
            
            // Add vertical grid line
            const verticalLine = document.createElement('div');
            verticalLine.className = 'grid-line-vertical';
            verticalLine.style.left = '-4px';
            column.appendChild(verticalLine);
            
            // Add images to column
            subarray.forEach((image, imageIndex) => {
                const imageContainer = document.createElement('div');
                imageContainer.className = 'relative';
                
                // Add horizontal grid line
                const horizontalLine = document.createElement('div');
                horizontalLine.className = 'grid-line-horizontal';
                horizontalLine.style.top = '-4px';
                imageContainer.appendChild(horizontalLine);
                
                // Add image
                const img = document.createElement('img');
                img.src = image;
                img.alt = `Merchandise Item ${imageIndex + 1}`;
                img.className = 'aspect-[970/700] rounded-lg object-cover ring ring-gray-950/5 hover:shadow-2xl';
                img.width = 970;
                img.height = 700;
                
                // Add hover effect
                img.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.transition = 'transform 0.3s ease-in-out';
                });
                
                img.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
                
                imageContainer.appendChild(img);
                column.appendChild(imageContainer);
            });
            
            // Animate the column
            if (window.motion) {
                motion.animate(column, {
                    y: colIndex % 2 === 0 ? [0, 100, 0] : [0, -100, 0]
                }, {
                    duration: colIndex % 2 === 0 ? 10 : 15,
                    repeat: Infinity,
                    easing: 'ease-in-out'
                });
            }
            
            gridContainer.appendChild(column);
        });
        
        innerContainer.appendChild(gridContainer);
        container.appendChild(innerContainer);
        marqueeContainer.appendChild(container);
    }
</script>
@endpush