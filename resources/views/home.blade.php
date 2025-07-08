@extends('layouts.app')
@section('content')
    <!-- Home Section -->
    <section>
        <!-- Hero Section -->
        <section
            class="relative overflow-hidden pt-32 pb-20 md:pt-40 md:pb-24 bg-gradient-to-b from-[#045947] via-[#0b9174] to-[#e6f7f2]">
            <!-- Background pattern overlay -->
            <div class="absolute inset-0 bg-pattern bg-no-repeat bg-cover opacity-10"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight drop-shadow-sm">
                            Powering the Future with <span class="text-[#FFD54F] drop-shadow-md">Renewable Energy</span>
                        </h1>
                        <p class="mt-6 text-lg md:text-xl text-[#f0f9f6] max-w-2xl font-medium drop-shadow-sm">
                            SRE UNAIR is a student organization rooted in SRE Indonesia, committed to renewable energy
                            innovation, education, and driving Indonesia’s sustainable future.
                        </p>
                        <div
                            class="mt-10 flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-5">
                            <!-- Register Button - background putih, dengan hover effect -->
                            <a href="/register"
                                class="inline-flex items-center justify-center px-7 py-3.5 text-base font-semibold rounded-full text-[#0E9671] bg-white hover:bg-[#f3f3f3] shadow-md hover:shadow-lg transform hover:-translate-y-1 hover:scale-105 transition duration-300 ease-in-out">
                                Register
                            </a>

                            <!-- Login Button - hanya stroke, hover ada fill -->
                            <a href="/login"
                                class="inline-flex items-center justify-center px-7 py-3.5 text-base font-semibold rounded-full text-[#0E9671] border-2 border-[#0E9671] bg-transparent hover:bg-[#0E9671] hover:text-[#ffffff] shadow-md hover:shadow-lg transform hover:-translate-y-1 hover:scale-105 transition duration-300 ease-in-out">
                                Login
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block relative hero-image-container">
                        <img src="{{ asset('assets/images/hero-image.png') }}" alt="Renewable Energy Illustration"
                            class="w-full max-w-lg mx-auto -mt-16 hero-image">
                    </div>
                </div>
            </div>

            <!-- Decorative elements -->
            <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-white to-transparent"></div>
            <div class="absolute top-20 right-10 w-20 h-20 rounded-full bg-[#FFD54F] opacity-20 blur-xl"></div>
            <div class="absolute bottom-40 left-10 w-32 h-32 rounded-full bg-[#0a5541] opacity-10 blur-xl"></div>
        </section>


        <!-- About Section -->
        <section id="about" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">About <span class="text-[#0E9671]">SRE
                            UNAIR</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="{{ asset('assets/images/solar-pannels.jpg') }}" alt="About SRE UNAIR"
                            class="rounded-lg shadow-xl w-full">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Society of Renewable Energy</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            The Society of Renewable Energy UNAIR, part of SRE Indonesia, is a student organization focused
                            on renewable energy solutions. Founded in 2020, we serve as a platform for students to innovate,
                            collaborate, and learn through hands-on experiences in the renewable energy sector.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Our mission is to support Indonesia’s energy transition by encouraging innovation, practical
                            implementation, and raising awareness. SRE UNAIR is committed to driving sustainable change for
                            a greener future.
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#0E9671]">
                                <div class="text-[#0E9671] text-4xl font-bold mb-2">10+</div>
                                <div class="text-gray-700">Projects Completed</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#0E9671]">
                                <div class="text-[#0E9671] text-4xl font-bold mb-2">500+</div>
                                <div class="text-gray-700">Active Members</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#0E9671]">
                                <div class="text-[#0E9671] text-4xl font-bold mb-2">20+</div>
                                <div class="text-gray-700">Events Organized</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-[#0E9671]">
                                <div class="text-[#0E9671] text-4xl font-bold mb-2">5+</div>
                                <div class="text-gray-700">Years of Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events Section -->
        <section id="events" class="py-16 md:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Upcoming <span
                            class="text-[#0E9671]">Events</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Join us for exciting events, workshops, and seminars focused on renewable energy and sustainability.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Event Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="{{ asset('assets/images/event-1.jpg') }}" alt="Renewable Energy Workshop"
                                class="w-full h-84 object-cover">
                            <div
                                class="absolute top-0 right-0 bg-[#0E9671] text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                                Upcoming
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                June 15, 2023 | 09:00 AM
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Renewable Energy Workshop</h3>
                            <p class="text-gray-700 mb-4">
                                Learn about the latest technologies in renewable energy and how to implement them in your
                                daily life.
                            </p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                UNAIR Campus B, Room 301
                            </div>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                Register Now
                            </a>
                        </div>
                    </div>

                    <!-- Event Card 2 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="{{ asset('assets/images/event-2.jpg') }}" alt="Solar Energy Seminar"
                                class="w-full h-84 object-cover">
                            <div
                                class="absolute top-0 right-0 bg-[#0E9671] text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                                Upcoming
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                July 5, 2023 | 13:00 PM
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Solar Energy Seminar</h3>
                            <p class="text-gray-700 mb-4">
                                Discover the potential of solar energy and how it can revolutionize our energy consumption
                                patterns.
                            </p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                UNAIR Auditorium
                            </div>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                Register Now
                            </a>
                        </div>
                    </div>

                    <!-- Event Card 3 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="{{ asset('assets/images/event-3.jpg') }}" alt="Green Technology Exhibition"
                                class="w-full h-84 object-cover">
                            <div
                                class="absolute top-0 right-0 bg-[#0E9671] text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">
                                Upcoming
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                August 20, 2023 | 10:00 AM
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Green Technology Exhibition</h3>
                            <p class="text-gray-700 mb-4">
                                Explore innovative green technologies and sustainable solutions at our annual exhibition.
                            </p>
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Surabaya Convention Center
                            </div>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href=/events
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-150 ease-in-out">
                        View All Events
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our <span
                            class="text-[#0E9671]">Projects</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Explore our innovative renewable energy projects that are making a difference in our community.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project Card 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                        <img src="{{ asset('assets/images/project-1.jpg') }}" alt="Solar Panel Installation"
                            class="w-full h-84 object-cover">
                        <div class="p-6">
                            <div
                                class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-3">
                                Solar Energy
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Campus Solar Panel Installation</h3>
                            <p class="text-gray-700 mb-4">
                                Installation of solar panels on campus buildings to reduce energy consumption and promote
                                renewable energy.
                            </p>
                            <a href="#" class="text-[#0E9671] hover:text-[#0c8566] font-medium flex items-center">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                        <img src="{{ asset('assets/images/project-2.jpg') }}" alt="Wind Turbine Research"
                            class="w-full h-84 object-cover">
                        <div class="p-6">
                            <div
                                class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-semibold mb-3">
                                Wind Energy
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Small-Scale Wind Turbine Research</h3>
                            <p class="text-gray-700 mb-4">
                                Research and development of small-scale wind turbines suitable for urban environments and
                                coastal areas.
                            </p>
                            <a href="#" class="text-[#0E9671] hover:text-[#0c8566] font-medium flex items-center">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                        <img src="{{ asset('assets/images/project-3.jpg') }}" alt="Biofuel Production"
                            class="w-full h-84 object-cover">
                        <div class="p-6">
                            <div
                                class="inline-block px-3 py-1 bg-[#F0C93D] text-[#7E6500] rounded-full text-sm font-semibold mb-3">
                                Bioenergy
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Sustainable Biofuel Production</h3>
                            <p class="text-gray-700 mb-4">
                                Development of sustainable biofuel production methods using agricultural waste and algae
                                cultivation.
                            </p>
                            <a href="#" class="text-[#0E9671] hover:text-[#0c8566] font-medium flex items-center">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href=/projects
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-150 ease-in-out">
                        View All Projects
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="py-16 md:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Educational <span
                            class="text-[#0E9671]">Resources</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Access our educational materials to learn more about renewable energy technologies and
                        sustainability practices.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Learn About Renewable Energy</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Our educational resources cover a wide range of topics related to renewable energy, including
                            solar, wind, hydro, geothermal, and bioenergy. Whether you're a student, professional, or simply
                            curious about sustainable energy, we have resources for all levels of knowledge.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 text-[#0E9671]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-lg font-medium text-gray-900">Comprehensive Guides</h4>
                                    <p class="mt-1 text-gray-600">Detailed guides on various renewable energy technologies
                                        and their applications.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 text-[#0E9671]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-lg font-medium text-gray-900">Video Tutorials</h4>
                                    <p class="mt-1 text-gray-600">Visual explanations of complex concepts and practical
                                        demonstrations.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 text-[#0E9671]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-lg font-medium text-gray-900">Research Papers</h4>
                                    <p class="mt-1 text-gray-600">Academic research and findings on cutting-edge renewable
                                        energy technologies.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 text-[#0E9671]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-lg font-medium text-gray-900">DIY Projects</h4>
                                    <p class="mt-1 text-gray-600">Step-by-step instructions for small-scale renewable
                                        energy projects you can build at home.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href=/education
                                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                Explore Resources
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div
                                class="h-12 w-12 bg-[#0E9671] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Solar Energy</h4>
                            <p class="text-gray-700">Learn about photovoltaic systems, solar thermal, and concentrated
                                solar power.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div
                                class="h-12 w-12 bg-[#0E9671] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Wind Energy</h4>
                            <p class="text-gray-700">Discover how wind turbines work and their role in the renewable energy
                                mix.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div
                                class="h-12 w-12 bg-[#0E9671] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Hydro Power</h4>
                            <p class="text-gray-700">Explore hydroelectric power generation and micro-hydro systems.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div
                                class="h-12 w-12 bg-[#0E9671] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Bioenergy</h4>
                            <p class="text-gray-700">Study biofuels, biomass, and biogas production technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section id="blog" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Latest from our <span
                            class="text-[#0E9671]">Blog</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Stay updated with the latest news, insights, and developments in the renewable energy sector.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Blog Post 1 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="{{ asset('assets/images/blog-1.jpg') }}" alt="The Future of Solar Energy"
                            class="w-full h-84 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                May 12, 2023
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">The Future of Solar Energy in Indonesia</h3>
                            <p class="text-gray-700 mb-4">
                                Exploring the potential and challenges of solar energy implementation in Indonesia's diverse
                                geographical landscape.
                            </p>
                            <a href="#" class="text-[#0E9671] hover:text-[#0c8566] font-medium flex items-center">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post 2 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="{{ asset('assets/images/blog-2.jpg') }}" alt="Wind Energy Innovations"
                            class="w-full h-84 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                April 28, 2023
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Recent Innovations in Wind Energy Technology
                            </h3>
                            <p class="text-gray-700 mb-4">
                                A look at the latest advancements in wind turbine design, efficiency, and integration with
                                power grids.
                            </p>
                            <a href="#" class="text-[#0E9671] hover:text-[#0c8566] font-medium flex items-center">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post 3 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="{{ asset('assets/images/blog-3.jpg') }}" alt="Sustainable Campus"
                            class="w-full h-84 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#0E9671]"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                April 15, 2023
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Creating a Sustainable Campus Environment</h3>
                            <p class="text-gray-700 mb-4">
                                How universities can lead the way in sustainability through renewable energy adoption and
                                green practices.
                            </p>
                            <a href="#" class="text-[#0E9671] hover:text-[#0c8566] font-medium flex items-center">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href=/blog
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-150 ease-in-out">
                        View All Blog Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Merchandise Section -->
        <section id="merchandise" class="py-16 md:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">SRE <span
                            class="text-[#0E9671]">Merchandise</span></h2>
                    <div class="mt-2 h-1 w-20 bg-[#0E9671] mx-auto"></div>
                    <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                        Support our organization by purchasing our eco-friendly merchandise. All proceeds go towards funding
                        our renewable energy projects.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Merchandise Item 1 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <div class="relative">
                            <img src="{{ asset('assets/images/merch-1.jpg') }}" alt="SRE T-Shirt"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute top-0 right-0 bg-[#F0C93D] text-[#7E6500] px-3 py-1 m-2 rounded-full text-sm font-semibold">
                                New
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">SRE Eco-Friendly T-Shirt</h3>
                            <p class="text-gray-700 mb-4">
                                Made from 100% organic cotton with eco-friendly dyes.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-[#0E9671]">Rp 120.000</span>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Merchandise Item 2 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="{{ asset('assets/images/merch-2.jpg') }}" alt="SRE Tote Bag"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">SRE Canvas Tote Bag</h3>
                            <p class="text-gray-700 mb-4">
                                Durable canvas tote bag with SRE logo, perfect for shopping.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-[#0E9671]">Rp 85.000</span>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Merchandise Item 3 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="{{ asset('assets/images/merch-3.jpg') }}" alt="SRE Water Bottle"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">SRE Stainless Steel Water Bottle</h3>
                            <p class="text-gray-700 mb-4">
                                Reusable water bottle that keeps drinks cold for 24 hours.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-[#0E9671]">Rp 150.000</span>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Merchandise Item 4 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="{{ asset('assets/images/merch-4.jpg') }}" alt="SRE Notebook"
                            class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">SRE Recycled Paper Notebook</h3>
                            <p class="text-gray-700 mb-4">
                                Notebook made from 100% recycled paper with renewable energy facts.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-[#0E9671]">Rp 65.000</span>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#0E9671] transition duration-150 ease-in-out">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href=/merchandise
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-150 ease-in-out">
                        View All Merchandise
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-16 md:py-24 bg-[#0E9671] text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Join the Renewable Energy Movement</h2>
                        <p class="text-lg text-white opacity-90 mb-8">
                            Become a part of SRE UNAIR and contribute to a sustainable future. Whether you're a student,
                            professional, or simply passionate about renewable energy, there's a place for you in our
                            community.
                        </p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href=#
                                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-[#0E9671] bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0E9671] focus:ring-white transition duration-150 ease-in-out shadow-lg">
                                Register Now
                            </a>
                            <a href="#contact"
                                class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-medium rounded-full text-white hover:bg-white hover:text-[#0E9671] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0E9671] focus:ring-white transition duration-150 ease-in-out shadow-lg">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <img src="{{ asset('assets/images/blog sre.jpg') }}" alt="Join SRE UNAIR"
                            class="w-full max-w-md mx-auto animate-pulse-slow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 md:py-24 bg-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900">
                        Get in <span class="text-[#0E9671] relative">
                            Touch
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-[#F0C93D]"></span>
                        </span>
                    </h2>
                    <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                        Have questions or want to collaborate? Reach out to us and we'll get back to you as soon as
                        possible.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
                    <!-- Contact Form - Takes 3 columns on large screens -->
                    <div class="lg:col-span-3">
                        <div
                            class="bg-white rounded-xl shadow-xl p-8 transform transition-all duration-500 hover:shadow-2xl">
                            <form class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Your name"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#0E9671] focus:ring focus:ring-[#0E9671] focus:ring-opacity-50 transition-all duration-300">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email"
                                        placeholder="your.email@example.com"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#0E9671] focus:ring focus:ring-[#0E9671] focus:ring-opacity-50 transition-all duration-300">
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                    <input type="text" name="subject" id="subject"
                                        placeholder="How can we help you?"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#0E9671] focus:ring focus:ring-[#0E9671] focus:ring-opacity-50 transition-all duration-300">
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                    <textarea name="message" id="message" rows="5" placeholder="Your message here..."
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#0E9671] focus:ring focus:ring-[#0E9671] focus:ring-opacity-50 transition-all duration-300"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full inline-flex items-center justify-center px-6 py-4 border border-transparent text-base font-medium rounded-full text-white bg-[#0E9671] hover:bg-[#0c8566] shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1">
                                        <span class="mr-2">Send Message</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Information - Takes 2 columns on large screens -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-xl shadow-xl p-8 h-full">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>

                            <div class="space-y-8">
                                <div class="flex items-start">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-full flex items-center justify-center bg-[#0E9671] bg-opacity-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Address</h4>
                                        <p class="mt-2 text-gray-600 leading-relaxed">
                                            Universitas Airlangga, Campus C<br>
                                            Jl. Dr. Ir. H. Soekarno, Surabaya<br>
                                            East Java, Indonesia 60115
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-full flex items-center justify-center bg-[#0E9671] bg-opacity-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Email</h4>
                                        <a href="mailto:info@sreunair.ac.id"
                                            class="mt-2 text-gray-600 hover:text-[#0E9671] transition-colors duration-300 inline-block">
                                            info@sreunair.ac.id
                                        </a>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="flex-shrink-0 h-12 w-12 rounded-full flex items-center justify-center bg-[#0E9671] bg-opacity-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#ffffff]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-semibold text-gray-900">Phone</h4>
                                        <a href="tel:+62315914042"
                                            class="mt-2 text-gray-600 hover:text-[#0E9671] transition-colors duration-300 inline-block">
                                            +62 31 5914042
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-xl font-bold text-gray-900 mb-4">Follow Us</h3>
                                <div class="flex space-x-5">
                                    <a href="#"
                                        class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-[#0E9671] hover:bg-opacity-10 hover:text-[#0E9671] transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-[#0E9671] hover:bg-opacity-10 hover:text-[#0E9671] transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-[#0E9671] hover:bg-opacity-10 hover:text-[#0E9671] transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="h-12 w-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-[#0E9671] hover:bg-opacity-10 hover:text-[#0E9671] transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Section -->
                <div class="mt-12">
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.906545565007!2d112.75055319070813!3d-7.271916003318285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa21615added%3A0x1dfef59c76b5fee9!2sAirlangga%20University!5e0!3m2!1sen!2sid!4v1744889836073!5m2!1sen!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
