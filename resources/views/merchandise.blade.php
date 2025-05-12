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
        
        <!-- 3D Marquee Display -->
        <div class="mx-auto my-10 max-w-7xl rounded-3xl bg-gray-950/5 p-2 ring-1 ring-neutral-700/10 dark:bg-neutral-800">
            <div id="merchandise-marquee" class="mx-auto block h-[600px] overflow-hidden rounded-2xl max-sm:h-100">
                <!-- The 3D marquee will be initialized here via JavaScript -->
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
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