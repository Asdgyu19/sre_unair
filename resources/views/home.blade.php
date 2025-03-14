<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://ugc.production.linktr.ee/yn2g2QyzSkSMUQr2yJJz_TidPGVM820oMTe38" type="image/jpg">
    <title>SRE UNAIR</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-sm shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-auto" src="https://ugc.production.linktr.ee/yn2g2QyzSkSMUQr2yJJz_TidPGVM820oMTe38" alt="SRE Logo">
                        <span class="ml-2 text-xl font-bold text-green-600">SRE Universitas Airlangga</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium transition duration-150">Beranda</a>
                    <a href="#about" class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium transition duration-150">Tentang</a>
                    <a href="#programs" class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium transition duration-150">Program</a>
                    <a href="#achievements" class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium transition duration-150">Pencapaian</a>
                    <a href="#events" class="text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium transition duration-150">Acara</a>
                    <a href="#contact" class="bg-green-600 text-white hover:bg-green-700 px-4 py-2 rounded-md text-sm font-medium transition duration-150">Gabung</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-green-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Beranda</a>
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Tentang</a>
                <a href="#programs" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Program</a>
                <a href="#achievements" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Pencapaian</a>
                <a href="#events" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Acara</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium bg-green-600 text-white hover:bg-green-700">Gabung</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative bg-cover bg-center h-screen flex items-center justify-center text-white"
             style="background-image: url('https://source.unsplash.com/1600x900/?solar-panels,wind-turbine');">
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/80 to-green-600/70"></div>
        <div class="relative text-center px-6 max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in-down">
                Society of Renewable Energy
                <span class="block text-green-300">Universitas Airlangga</span>
            </h1>
            <p class="mt-6 text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto">Membangun Masa Depan Berkelanjutan Melalui Inovasi, Edukasi, dan Kolaborasi dalam Energi Terbarukan</p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#about" class="px-8 py-3 bg-green-500 hover:bg-green-600 text-white rounded-full text-lg font-medium transition duration-300 transform hover:scale-105 shadow-lg">Pelajari Lebih Lanjut</a>
                <a href="#contact" class="px-8 py-3 bg-white hover:bg-gray-100 text-green-600 rounded-full text-lg font-medium transition duration-300 transform hover:scale-105 shadow-lg">Gabung Bersama Kami</a>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Tentang Kami</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Mengenal Society of Renewable Energy UNAIR
                </p>
                <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-500">
                    Komunitas mahasiswa yang berdedikasi untuk masa depan energi yang lebih bersih dan berkelanjutan.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-xl">
                        <img src="https://source.unsplash.com/800x600/?students,renewable-energy" alt="SRE Team" class="object-cover w-full h-full">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-green-100 rounded-lg p-4 shadow-lg">
                        <p class="text-green-800 font-bold text-lg">Didirikan pada 2018</p>
                        <p class="text-green-600">Oleh mahasiswa Universitas Airlangga</p>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Visi Kami</h3>
                        <p class="mt-3 text-gray-600">Menjadi pusat keunggulan dalam penelitian, edukasi, dan implementasi energi terbarukan di Indonesia, serta mencetak generasi muda yang peduli terhadap keberlanjutan energi.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Misi Kami</h3>
                        <ul class="mt-3 space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Mengembangkan penelitian inovatif dalam bidang energi terbarukan
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Mengedukasi masyarakat tentang pentingnya energi berkelanjutan
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Membangun kolaborasi dengan berbagai pihak untuk implementasi energi terbarukan
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Mengadvokasi kebijakan yang mendukung transisi energi berkelanjutan
                            </li>
                        </ul>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-700">
                        Pelajari lebih lanjut tentang kami
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-green-600 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <p class="text-4xl font-bold">500+</p>
                    <p class="mt-2 text-green-100">Anggota Aktif</p>
                </div>
                <div class="p-4">
                    <p class="text-4xl font-bold">25+</p>
                    <p class="mt-2 text-green-100">Proyek Penelitian</p>
                </div>
                <div class="p-4">
                    <p class="text-4xl font-bold">40+</p>
                    <p class="mt-2 text-green-100">Acara Tahunan</p>
                </div>
                <div class="p-4">
                    <p class="text-4xl font-bold">15+</p>
                    <p class="mt-2 text-green-100">Penghargaan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Program Kami</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Inisiatif untuk Masa Depan Berkelanjutan
                </p>
                <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-500">
                    Kami mengembangkan berbagai program untuk mendorong adopsi energi terbarukan dan kesadaran lingkungan.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Program Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/600x400/?workshop,education')"></div>
                    <div class="p-6">
                        <div class="inline-block p-3 rounded-full bg-green-100 text-green-600 mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Edukasi Energi</h3>
                        <p class="mt-3 text-gray-600">Program edukasi melalui seminar, workshop, dan pelatihan untuk meningkatkan pemahaman tentang energi terbarukan.</p>
                        <div class="mt-4 flex items-center text-green-600">
                            <span class="text-sm font-medium">Pelajari lebih lanjut</span>
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Program Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/600x400/?research,laboratory')"></div>
                    <div class="p-6">
                        <div class="inline-block p-3 rounded-full bg-green-100 text-green-600 mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Riset & Inovasi</h3>
                        <p class="mt-3 text-gray-600">Mengembangkan penelitian dan proyek inovatif dalam bidang energi terbarukan dan teknologi hijau.</p>
                        <div class="mt-4 flex items-center text-green-600">
                            <span class="text-sm font-medium">Pelajari lebih lanjut</span>
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Program Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/600x400/?campaign,environment')"></div>
                    <div class="p-6">
                        <div class="inline-block p-3 rounded-full bg-green-100 text-green-600 mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Kampanye Hijau</h3>
                        <p class="mt-3 text-gray-600">Mengajak masyarakat untuk lebih peduli terhadap lingkungan melalui kampanye dan aksi nyata.</p>
                        <div class="mt-4 flex items-center text-green-600">
                            <span class="text-sm font-medium">Pelajari lebih lanjut</span>
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Pencapaian</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Jejak Langkah Kami
                </p>
                <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-500">
                    Beberapa pencapaian yang telah kami raih dalam perjalanan menuju masa depan energi yang berkelanjutan.
                </p>
            </div>
            
            <div class="relative">
                <!-- Timeline -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-green-200"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-8">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-green-600 font-semibold">2018</p>
                                <h3 class="text-xl font-bold mt-1">Pendirian SRE UNAIR</h3>
                                <p class="mt-2 text-gray-600">Didirikan oleh sekelompok mahasiswa yang peduli terhadap isu energi berkelanjutan.</p>
                            </div>
                        </div>
                        <div class="hidden md:block z-10 flex-shrink-0 h-12 w-12 rounded-full bg-green-500 flex items-center justify-center">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <div class="flex-1 md:pl-8 mt-4 md:mt-0"></div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-8 md:text-right order-2 md:order-1"></div>
                        <div class="hidden md:block z-10 flex-shrink-0 h-12 w-12 rounded-full bg-green-500 flex items-center justify-center order-1 md:order-2">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div class="flex-1 md:pl-8 order-3 md:order-3">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-green-600 font-semibold">2020</p>
                                <h3 class="text-xl font-bold mt-1">Juara Kompetisi Nasional</h3>
                                <p class="mt-2 text-gray-600">Memenangkan kompetisi inovasi energi terbarukan tingkat nasional dengan proyek panel surya portabel.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:text-right md:pr-8">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-green-600 font-semibold">2022</p>
                                <h3 class="text-xl font-bold mt-1">Kolaborasi Internasional</h3>
                                <p class="mt-2 text-gray-600">Menjalin kerjasama dengan universitas di Jepang untuk penelitian bersama tentang energi hidrogen.</p>
                            </div>
                        </div>
                        <div class="hidden md:block z-10 flex-shrink-0 h-12 w-12 rounded-full bg-green-500 flex items-center justify-center">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <div class="flex-1 md:pl-8 mt-4 md:mt-0"></div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-8 md:text-right order-2 md:order-1"></div>
                        <div class="hidden md:block z-10 flex-shrink-0 h-12 w-12 rounded-full bg-green-500 flex items-center justify-center order-1 md:order-2">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path>
                            </svg>
                        </div>
                        <div class="flex-1 md:pl-8 order-3 md:order-3">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <p class="text-green-600 font-semibold">2023</p>
                                <h3 class="text-xl font-bold mt-1">Implementasi Proyek Kampus</h3>
                                <p class="mt-2 text-gray-600">Berhasil mengimplementasikan sistem panel surya untuk penerangan di area kampus Universitas Airlangga.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Acara Mendatang</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Bergabunglah dalam Kegiatan Kami
                </p>
                <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-500">
                    Ikuti berbagai acara menarik yang kami selenggarakan untuk memperluas wawasan dan jaringan Anda.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="https://source.unsplash.com/600x400/?conference,seminar" alt="Seminar Energi Terbarukan" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-green-600 text-white px-4 py-2 rounded-bl-lg">
                            <p class="font-bold">15</p>
                            <p class="text-sm">Juni</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Seminar Energi Terbarukan</h3>
                        <p class="mt-2 text-gray-600">Diskusi mendalam tentang perkembangan terbaru dalam teknologi energi terbarukan di Indonesia.</p>
                        <div class="mt-4 flex items-center text-gray-500">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Aula Fakultas Sains dan Teknologi</span>
                        </div>
                        <div class="mt-2 flex items-center text-gray-500">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>09:00 - 12:00 WIB</span>
                        </div>
                        <a href="#" class="mt-4 block w-full bg-green-600 text-white text-center py-2 rounded-md hover:bg-green-700 transition duration-300">Daftar Sekarang</a>
                    </div>
                </div>
                
                <!-- Event Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="https://source.unsplash.com/600x400/?workshop,training" alt="Workshop Panel Surya" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-green-600 text-white px-4 py-2 rounded-bl-lg">
                            <p class="font-bold">22</p>
                            <p class="text-sm">Juli</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Workshop Panel Surya</h3>
                        <p class="mt-2 text-gray-600">Belajar cara merakit dan mengoptimalkan sistem panel surya untuk kebutuhan rumah tangga.</p>
                        <div class="mt-4 flex items-center text-gray-500">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Laboratorium Energi Terbarukan</span>
                        </div>
                        <div class="mt-2 flex items-center text-gray-500">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>13:00 - 16:00 WIB</span>
                        </div>
                        <a href="#" class="mt-4 block w-full bg-green-600 text-white text-center py-2 rounded-md hover:bg-green-700 transition duration-300">Daftar Sekarang</a>
                    </div>
                </div>
                
                <!-- Event Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="https://source.unsplash.com/600x400/?competition,innovation" alt="Kompetisi Inovasi" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-green-600 text-white px-4 py-2 rounded-bl-lg">
                            <p class="font-bold">10</p>
                            <p class="text-sm">Agustus</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Kompetisi Inovasi Energi</h3>
                        <p class="mt-2 text-gray-600">Ajang kompetisi untuk menampilkan ide dan inovasi dalam bidang energi terbarukan.</p>
                        <div class="mt-4 flex items-center text-gray-500">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Gedung Rektorat Universitas Airlangga</span>
                        </div>
                        <div class="mt-2 flex items-center text-gray-500">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>08:00 - 17:00 WIB</span>
                        </div>
                        <a href="#" class="mt-4 block w-full bg-green-600 text-white text-center py-2 rounded-md hover:bg-green-700 transition duration-300">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-green-600 text-green-600 rounded-md hover:bg-green-600 hover:text-white transition duration-300">
                    Lihat Semua Acara
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Testimoni</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Apa Kata Mereka
                </p>
                <p class="mt-4 max-w-3xl mx-auto text-xl text-gray-500">
                    Pengalaman anggota dan mitra kami dalam berpartisipasi di Society of Renewable Energy UNAIR.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                            <img src="https://source.unsplash.com/100x100/?portrait,man" alt="Ahmad" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Ahmad Rizki</h4>
                            <p class="text-gray-500 text-sm">Mahasiswa Teknik Lingkungan</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Bergabung dengan SRE UNAIR membuka wawasan saya tentang energi terbarukan. Saya mendapatkan banyak pengalaman berharga dan jaringan yang luas."</p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                            <img src="https://source.unsplash.com/100x100/?portrait,woman" alt="Siti" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Siti Nurhaliza</h4>
                            <p class="text-gray-500 text-sm">Mahasiswa Fisika</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Program riset di SRE UNAIR sangat membantu saya mengembangkan keterampilan penelitian. Mentor dan fasilitas yang disediakan sangat mendukung."</p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                            <img src="https://source.unsplash.com/100x100/?portrait,professor" alt="Dr. Budi" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Dr. Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Dosen Pembimbing</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"SRE UNAIR telah menunjukkan dedikasi luar biasa dalam mengembangkan solusi energi terbarukan. Mahasiswa yang terlibat menunjukkan potensi besar."</p>
                    <div class="mt-4 flex text-yellow-400">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-green-600 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-green-200 font-semibold tracking-wide uppercase">Hubungi Kami</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight sm:text-4xl">
                    Bergabung atau Berkolaborasi
                </p>
                <p class="mt-4 max-w-3xl mx-auto text-xl text-green-100">
                    Tertarik untuk bergabung dengan kami atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-xl shadow-xl overflow-hidden text-gray-800">
                    <form class="p-8">
                        <h3 class="text-2xl font-bold mb-6">Kirim Pesan</h3>
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Masukkan alamat email Anda">
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 text-sm font-medium mb-2">Subjek</label>
                            <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Masukkan subjek pesan">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 text-sm font-medium mb-2">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Tulis pesan Anda di sini"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white py-3 px-4 rounded-md hover:bg-green-700 transition duration-300">Kirim Pesan</button>
                    </form>
                </div>
                
                <div class="flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Informasi Kontak</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="h-6 w-6 text-green-300 mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium">Alamat</p>
                                    <p class="text-green-100">Kampus C Universitas Airlangga, Jl. Dr. Ir. H. Soekarno, Mulyorejo, Surabaya, Jawa Timur 60115</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="h-6 w-6 text-green-300 mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium">Email</p>
                                    <p class="text-green-100">sre.unair@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="h-6 w-6 text-green-300 mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <p class="font-medium">Telepon</p>
                                    <p class="text-green-100">+62 812 3456 7890</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="text-xl font-bold mb-4">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center hover:bg-green-400 transition duration-300">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center hover:bg-green-400 transition duration-300">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center hover:bg-green-400 transition duration-300">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center hover:bg-green-400 transition duration-300">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 lg:mt-0 bg-green-700 rounded-xl p-6">
                        <h4 class="text-xl font-bold mb-4">Jam Operasional</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Senin - Jumat</span>
                                <span>08:00 - 16:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sabtu</span>
                                <span>09:00 - 13:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Minggu</span>
                                <span>Tutup</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img class="h-10 w-auto" src="/placeholder.svg?height=40&width=40" alt="SRE Logo">
                        <span class="ml-2 text-xl font-bold text-white">SRE UNAIR</span>
                    </div>
                    <p class="text-gray-400">Membangun masa depan dengan energi berkelanjutan melalui inovasi, edukasi, dan kolaborasi.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="hover:text-green-400 transition duration-300">Beranda</a></li>
                        <li><a href="#about" class="hover:text-green-400 transition duration-300">Tentang Kami</a></li>
                        <li><a href="#programs" class="hover:text-green-400 transition duration-300">Program</a></li>
                        <li><a href="#achievements" class="hover:text-green-400 transition duration-300">Pencapaian</a></li>
                        <li><a href="#events" class="hover:text-green-400 transition duration-300">Acara</a></li>
                        <li><a href="#contact" class="hover:text-green-400 transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Program</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-green-400 transition duration-300">Edukasi Energi</a></li>
                        <li><a href="#" class="hover:text-green-400 transition duration-300">Riset & Inovasi</a></li>
                        <li><a href="#" class="hover:text-green-400 transition duration-300">Kampanye Hijau</a></li>
                        <li><a href="#" class="hover:text-green-400 transition duration-300">Kolaborasi Industri</a></li>
                        <li><a href="#" class="hover:text-green-400 transition duration-300">Kompetisi Mahasiswa</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Berlangganan</h4>
                    <p class="text-gray-400 mb-4">Dapatkan informasi terbaru tentang acara dan program kami.</p>
                    <form>
                        <div class="flex">
                            <input type="email" placeholder="Alamat email Anda" class="px-4 py-2 w-full rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500 text-gray-800">
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-r-md hover:bg-green-700 transition duration-300">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; 2024 Society of Renewable Energy UNAIR. All Rights Reserved.</p>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white mx-2">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white mx-2">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-green-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-green-700">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 64, // Adjust for navbar height
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Add animation classes
        document.addEventListener('DOMContentLoaded', function() {
            // Add any additional animations or initializations here
        });
    </script>
</body>
</html>