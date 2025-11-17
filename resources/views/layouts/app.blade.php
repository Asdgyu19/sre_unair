<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <title>@yield('title', 'SRE UNAIR - Society of Renewable Energy Universitas Airlangga')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Motion.js for animations -->
    <script src="https://unpkg.com/motion/dist/motion.js"></script>
    <!-- Your merchandise marquee script -->
    <script src="{{ asset('js/merchandise-marquee.js') }}"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        .hero-pattern {
            background-color: #0E9671;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        .animate-pulse-slow {
            animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.8;
            }
        }
        /* Oval header styles */
        .oval-header {
            border-radius: 9999px;
            padding: 0.5rem 1.5rem;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .nav-item {
            position: relative;
            padding: 0.5rem 1rem;
            transition: all 0.2s;
        }
        .nav-item:hover {
            color: #0E9671;
        }
        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: #0E9671;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-item:hover::after {
            width: 70%;
        }
        .auth-button {
            border-radius: 9999px;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s ease;
        }
        .login-button {
            background-color: #0E9671;
            color: white;
        }
        .login-button:hover {
            background-color: #0c8566;
            transform: translateY(-1px);
        }
        .register-button {
            background-color: #0E9671;
            color: white;
        }
        .register-button:hover {
            background-color: #0c8566;
            transform: translateY(-1px);
        }
        /* Mobile menu styles */
        .mobile-menu {
            border-radius: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <!-- Improved Oval Header/Navigation -->
    <header class="fixed w-full z-50 transition-all duration-300 py-3" id="main-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="oval-header flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center group">
                    <img class="h-10 w-auto transition-transform duration-300 group-hover:scale-110" 
                         src="{{ asset('/assets/images/logo.png') }}" 
                         alt="SRE UNAIR Logo">
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="nav-item text-sm font-medium text-gray-700">Home</a>
                    <a href="{{ route('about') }}" class="nav-item text-sm font-medium text-gray-700">About</a>
                    <a href="{{ route('projects') }}" class="nav-item text-sm font-medium text-gray-700">Projects</a>
                    <a href="{{ route('events') }}" class="nav-item text-sm font-medium text-gray-700">Events</a>
                    <a href="{{ route('education') }}" class="nav-item text-sm font-medium text-gray-700">Education</a>
                    <a href="{{ route('blog') }}" class="nav-item text-sm font-medium text-gray-700">Blog</a>
                    <a href="{{ route('merchandise') }}" class="nav-item text-sm font-medium text-gray-700">Merchandise</a>
                    
                    @if (Route::has('login.form'))
                        <div class="ml-4 flex items-center space-x-3">
                            @auth
                                <!-- Profile Dropdown -->
                                <div class="relative" x-data="{ open: false }">
                                    <button @click="open = !open" class="flex items-center space-x-2 p-1 rounded-full hover:bg-gray-100 transition-colors duration-200">
                                        @if(auth()->user()->profile_photo)
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="{{ auth()->user()->name }}">
                                        @else
                                            <div class="h-8 w-8 rounded-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-sm font-medium">
                                                {{ substr(auth()->user()->name, 0, 1) }}
                                            </div>
                                        @endif
                                        <span class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</span>
                                        <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Menu -->
                                    <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                                        <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                            <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            My Profile
                                        </a>
                                        @if(auth()->user()->hasAdminAccess())
                                            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                                <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                                Admin Panel
                                            </a>
                                        @endif
                                        <div class="border-t border-gray-100 my-1"></div>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200">
                                                <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login.form') }}" class="auth-button login-button text-sm font-medium">
                                    Log in
                                </a>
                            @endauth
                        </div>
                    @endif
                </nav>

                <!-- Mobile Menu Button & Profile -->
                <div class="flex items-center space-x-3 md:hidden">
                    @auth
                        <!-- Mobile Profile Icon -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center p-1 rounded-full hover:bg-gray-100 transition-colors duration-200">
                                @if(auth()->user()->profile_photo)
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="{{ auth()->user()->name }}">
                                @else
                                    <div class="h-8 w-8 rounded-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-sm font-medium">
                                        {{ substr(auth()->user()->name, 0, 1) }}
                                    </div>
                                @endif
                            </button>
                            
                            <!-- Mobile Profile Dropdown -->
                            <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                                <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                    <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    My Profile
                                </a>
                                @if(auth()->user()->hasAdminAccess())
                                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                        <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                        Admin Panel
                                    </a>
                                @endif
                                <div class="border-t border-gray-100 my-1"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200">
                                        <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                    
                    <button type="button" id="mobile-menu-button" class="p-2 rounded-full text-gray-500 hover:text-[#0E9671] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#0E9671]" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg id="menu-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden transition-all duration-300 ease-in-out mt-3 px-4" id="mobile-menu">
            <div class="mobile-menu bg-white/95 backdrop-blur-md shadow-md pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-2 text-base font-medium text-[#0E9671] rounded-lg bg-[#0E9671]/10">Home</a>
                <a href="{{ route('about') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-[#0E9671] hover:bg-[#0E9671]/10 rounded-lg transition-colors duration-200">About</a>
                <a href="{{ route('projects') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-[#0E9671] hover:bg-[#0E9671]/10 rounded-lg transition-colors duration-200">Projects</a>
                <a href="{{ route('events') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-[#0E9671] hover:bg-[#0E9671]/10 rounded-lg transition-colors duration-200">Events</a>
                <a href="{{ route('education') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-[#0E9671] hover:bg-[#0E9671]/10 rounded-lg transition-colors duration-200">Education</a>
                <a href="{{ route('blog') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-[#0E9671] hover:bg-[#0E9671]/10 rounded-lg transition-colors duration-200">Blog</a>
                <a href="{{ route('merchandise') }}" class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-[#0E9671] hover:bg-[#0E9671]/10 rounded-lg transition-colors duration-200">Merchandise</a>
            
                <div class="pt-4 mt-2 border-t border-gray-200">
                    @if (Route::has('login.form'))
                        <div class="flex flex-col space-y-3 px-4 py-2">
                            @guest
                                <a href="{{ route('login.form') }}" class="w-full px-4 py-2 text-center text-sm font-medium text-white bg-[#0E9671] rounded-lg hover:bg-[#0c8566] shadow-md transition-all duration-300">
                                    Log in
                                </a>
                            @endguest
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#0E9671] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        {{-- <img class="h-10 w-auto" src="{{ asset('assets/images/logo.png') }}" alt="SRE UNAIR Logo"> --}}
                        <div class="ml-3 text-lg font-semibold">SRE <span class="text-[#F0C93D]">UNAIR</span></div>
                    </div>
                    <p class="text-white text-opacity-80 mb-4">
                        Society of Renewable Energy Universitas Airlangga is dedicated to promoting sustainable energy solutions and educating the next generation of renewable energy leaders.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="{{ route('events') }}" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Events</a></li>
                        <li><a href="{{ route('projects') }}" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Projects</a></li>
                        <li><a href="{{ route('education') }}" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Education</a></li>
                        <li><a href="{{ route('blog') }}" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Blog</a></li>
                        <li><a href="{{ route('merchandise') }}" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Merchandise</a></li>
                        <li><a href="#contact" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Solar Energy</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Wind Energy</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Hydro Power</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Bioenergy</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Geothermal Energy</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Energy Storage</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Sustainable Living</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-white text-opacity-80 mb-4">
                        Subscribe to our newsletter to receive updates on our latest events, projects, and educational resources.
                    </p>
                    <form class="mt-4">
                        <div class="flex">
                            <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded-l-full border-gray-300 focus:border-[#F0C93D] focus:ring-[#F0C93D]">
                            <button type="submit" class="bg-[#F0C93D] text-[#0E9671] px-4 py-2 rounded-r-full hover:bg-[#e0b92d] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F0C93D] transition duration-150 ease-in-out font-medium">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="border-t border-white border-opacity-20 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-white text-opacity-80 text-sm">
                    &copy; {{ date('Y') }} Society of Renewable Energy Universitas Airlangga. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0">
                    <ul class="flex space-x-4 text-sm">
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Terms of Service</a></li>
                        <li><a href="#" class="text-white text-opacity-80 hover:text-white transition-colors duration-300">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    @include('components.back-to-top')

    <!-- JavaScript for header functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }
            
            // Header scroll effect
            const header = document.getElementById('main-header');
            
            // function handleScroll() {
            //     if (window.scrollY > 10) {
            //         header.classList.add('shadow-md');
            //     } else {
            //         header.classList.remove('shadow-md');
            //     }
            // }
            
            // Set initial state
            handleScroll();
            
            // Add scroll event listener
            window.addEventListener('scroll', handleScroll);
        });
    </script>
</body>
</html>