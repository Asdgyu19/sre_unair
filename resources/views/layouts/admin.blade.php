<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>

    {{-- Memuat file CSS dari Vite (konfigurasi standar Laravel) --}}
    @vite('resources/css/app.css')

    {{-- Memuat Alpine.js untuk interaktivitas --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <div x-data="{ sidebarOpen: false }" x-cloak>
        {{-- Sidebar --}}
        <aside 
            class="fixed inset-y-0 left-0 bg-gray-800 text-white w-64 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-30"
            :class="{'translate-x-0': sidebarOpen}">
            
            {{-- Logo / Header Sidebar --}}
            <div class="px-4 py-6 text-center">
                <h1 class="text-xl font-bold leading-none"><a href="{{ route('admin.projects.index') }}">Admin Panel</a></h1>
            </div>

            {{-- Navigasi Sidebar --}}
            <nav class="flex-grow px-4">
                {{-- Helper untuk link, agar tidak duplikat kode --}}
                @php
                function nav_link($route, $icon, $label) {
                    $isActive = request()->routeIs($route . '*');
                    $linkClass = 'flex items-center px-4 py-2 mt-2 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white';
                    if ($isActive) {
                        $linkClass .= ' bg-gray-700 text-white';
                    }
                    echo '<a href="' . route($route) . '" class="' . $linkClass . '">';
                    echo $icon; // SVG icon
                    echo '<span class="ml-3">' . $label . '</span>';
                    echo '</a>';
                }
                @endphp

                {{ nav_link('admin.dashboard', '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>', 'Dashboard') }}
                {{ nav_link('admin.events.index', '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>', 'Manage Event') }}
                {{ nav_link('admin.projects.index', '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>', 'Manage Project') }}
                {{ nav_link('admin.blog.index', '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>', 'Manage Blog') }}
                {{ nav_link('admin.merchandise.index', '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>', 'Manage Merchandise') }}
                {{ nav_link('admin.user.index', '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21v-1a6 6 0 00-1.78-4.125"></path></svg>', 'Manage Users') }}

                {{-- Link Logout menggunakan Form --}}
                <div class="absolute bottom-0 w-full p-4">
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center px-4 py-2 mt-2 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span class="ml-3">Logout</span>
                        </button>
                    </form>
                </div>
            </nav>
        </aside>

        {{-- Area Konten Utama --}}
        <div class="md:ml-64 flex flex-col flex-1">
            
            {{-- Tombol Hamburger (hanya terlihat di mobile) --}}
            <header class="flex justify-between items-center p-4 bg-white border-b md:hidden">
                <h1 class="text-xl font-bold">Admin Panel</h1>
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none focus:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </header>

            {{-- Konten Dinamis --}}
            <main class="flex-grow p-6">
                @yield('content')
            </main>
        </div>

        {{-- Overlay untuk background saat sidebar mobile terbuka --}}
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-black opacity-50 z-20 md:hidden" x-transition></div>
    </div>
    @stack('scripts')

</body>
</html>