// resources/js/merchandise-marquee.js
document.addEventListener('DOMContentLoaded', function() {
    // Check if the merchandise marquee element exists
    const marqueeContainer = document.getElementById('merchandise-marquee');
    if (!marqueeContainer) return;
    
    // Get all merchandise images from the public folder
    const merchandiseImages = [
        // Update these paths to match your actual images
        '/assets/images/merchandise/item1.jpg',
        '/assets/images/merchandise/item2.jpg',
        '/assets/images/merchandise/item3.jpg',
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
            img.className = 'aspect-[970/700] rounded-lg object-cover ring ring-[#f8d231]/20 hover:shadow-2xl hover:shadow-[#f8d231]/10';
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
        
        // Animate the column if motion library is available
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