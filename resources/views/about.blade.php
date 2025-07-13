@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-teal-50">
  <!-- Hero Section -->
  <section class="relative overflow-hidden bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 text-white">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative container mx-auto px-4 py-24 lg:px-8">
      <div class="text-center max-w-4xl mx-auto">
        <h1 class="text-5xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-emerald-100 bg-clip-text text-transparent">
          About Us
        </h1>
        <div class="w-24 h-1 bg-gradient-to-r from-emerald-300 to-teal-300 mx-auto mb-8 rounded-full"></div>
        <p class="text-xl lg:text-2xl leading-relaxed text-emerald-50 font-light">
          Universitas Airlangga's Society of Renewable Energy (SRE UNAIR) is a student organization dedicated to
          promoting sustainable energy solutions and environmental awareness. We strive to educate, innovate, and
          inspire the next generation of renewable energy leaders.
        </p>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent"></div>
  </section>

  <!-- Vision & Mission Section -->
  <section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
      <div class="bg-white/80 backdrop-blur-sm border-0 shadow-2xl rounded-3xl overflow-hidden">
        <div class="p-12 lg:p-16">
          <!-- Vision -->
          <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="6"></circle>
                <circle cx="12" cy="12" r="2"></circle>
              </svg>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-8">
              VISION
            </h2>
            <p class="text-xl lg:text-2xl text-gray-700 leading-relaxed font-light max-w-4xl mx-auto">
              Establish SRE UNAIR as a center for education and innovation in renewable energy, creating a
              generation of competent, competitive, and impactful contributors to sustainable development in
              Indonesia.
            </p>
          </div>

          <!-- Mission -->
          <div>
            <div class="text-center mb-16">
              <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-2xl mb-6">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <h2 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-teal-600 to-emerald-600 bg-clip-text text-transparent">
                MISSION
              </h2>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">
              <!-- Mission Item 1 -->
              <div class="group hover:shadow-xl transition-all duration-300 border-0 bg-gradient-to-br from-white to-gray-50 rounded-xl p-8">
                <div class="flex items-start gap-6">
                  <div class="flex-shrink-0 w-18 h-18 rounded-4xl overflow-hidden group-hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('assets/images/about/Empowering.png') }}" alt="Empowering Logo" class="w-full h-full object-cover">
                  </div>
                  <p class="text-lg text-gray-700 leading-relaxed font-medium">
                    Empower members to become change agents in renewable energy through innovative education and training programs.
                  </p>
                </div>
              </div>

              <!-- Mission Item 2 -->
              <div class="group hover:shadow-xl transition-all duration-300 border-0 bg-gradient-to-br from-white to-gray-50 rounded-xl p-8">
                <div class="flex items-start gap-6">
                  <div class="flex-shrink-0 w-18 h-18 rounded-4xl overflow-hidden group-hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('assets/images/about/knowledge.png') }}" alt="Empowering Logo" class="w-full h-full object-cover">
                  </div>
                  <p class="text-lg text-gray-700 leading-relaxed font-medium">
                    Offer opportunities for members to engage in research and innovation, contributing impactful solutions for society.
                  </p>
                </div>
              </div>

              <!-- Mission Item 3 -->
              <div class="group hover:shadow-xl transition-all duration-300 border-0 bg-gradient-to-br from-white to-gray-50 rounded-xl p-8">
                <div class="flex items-start gap-6">
                  <div class="flex-shrink-0 w-18 h-18 rounded-4xl overflow-hidden group-hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('assets/images/about/Networking.png') }}" alt="Empowering Logo" class="w-full h-full object-cover">
                  </div>
                  <p class="text-lg text-gray-700 leading-relaxed font-medium">
                    Foster members' growth with a hands-on curriculum, equipping them to understand and teach renewable energy concepts effectively.
                  </p>
                </div>
              </div>

              <!-- Mission Item 4 -->
              <div class="group hover:shadow-xl transition-all duration-300 border-0 bg-gradient-to-br from-white to-gray-50 rounded-xl p-8">
                <div class="flex items-start gap-6">
                  <div class="flex-shrink-0 w-18 h-18 rounded-4xl overflow-hidden group-hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('assets/images/about/Opportunity.png') }}" alt="Empowering Logo" class="w-full h-full object-cover">
                  </div>
                  <p class="text-lg text-gray-700 leading-relaxed font-medium">
                    Apply knowledge and skills through community service and educational programs, raising awareness about renewable energy.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
<!-- Leadership Section -->
<section class="py-20 px-4 lg:px-8 bg-gradient-to-br from-gray-50 to-emerald-50">
  <div class="container mx-auto max-w-6xl">
    <div class="text-center mb-16">
      <h3 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
        Top Executive
      </h3>
      <p class="text-xl text-gray-600 font-light">Meet the dedicated leaders driving our mission forward</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach([
        [
          'title' => 'President',
          'name' => 'Wigi Utami',
          'image' => 'wigi.JPG',
          'instagram' => 'https://instagram.com/wigiutami',
          'linkedin' => 'https://linkedin.com/in/wigiutami'
        ],
        [
          'title' => 'Vice President',
          'name' => 'Fakhrur Rozi',
          'image' => 'fakhrur.jpg',
          'instagram' => 'https://instagram.com/fakhrur',
          'linkedin' => 'https://linkedin.com/in/fakhrur'
        ],
        [
          'title' => 'Secretary',
          'name' => 'Najwa Salsa Nabila',
          'image' => 'najwa.jpg',
          'instagram' => 'https://instagram.com/najwasalsa',
          'linkedin' => 'https://linkedin.com/in/najwasalsa'
        ],
        [
          'title' => 'Assistant Secretary',
          'name' => 'Wahyunillahi',
          'image' => 'wahyu.jpg',
          'instagram' => 'https://instagram.com/wahyunillahi',
          'linkedin' => 'https://linkedin.com/in/wahyunillahi'
        ],
        [
          'title' => 'Chief Finance Officer',
          'name' => 'Eka Nurliana',
          'image' => 'eka.jpg',
          'instagram' => 'https://instagram.com/ekanurliana',
          'linkedin' => 'https://linkedin.com/in/ekanurliana'
        ],
        [
          'title' => 'Treasurer',
          'name' => 'Elfa Rosa Putri Yulianto',
          'image' => 'elfa.jpg',
          'instagram' => 'https://instagram.com/elfarosa',
          'linkedin' => 'https://linkedin.com/in/elfarosa'
        ],
      ] as $leader)
      <div class="group hover:shadow-2xl transition-all duration-500 border-0 bg-white overflow-hidden rounded-2xl">
        <div class="relative">
          <img src="{{ asset('images/executive/' . $leader['image']) }}" alt="{{ $leader['name'] }}" class="object-cover w-full h-80">
        </div>
        <div class="p-8 text-center">
          <h4 class="text-2xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-2">
            {{ $leader['title'] }}
          </h4>
          <p class="text-gray-600 mb-6 font-medium">{{ $leader['name'] }}</p>
          <div class="flex justify-center space-x-4">
            <!-- Instagram -->
            <a href="{{ $leader['instagram'] }}" target="_blank" class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-50 to-teal-50 hover:from-emerald-500 hover:to-teal-600 hover:text-white transition-all duration-300 flex items-center justify-center group/btn">
              <svg class="w-5 h-5 text-emerald-600 group-hover/btn:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zM12 7a5 5 0 1 1 0 10a5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7zm5.25-.88a.88.88 0 1 1-1.75 0a.88.88 0 0 1 1.75 0z"/>
              </svg>
            </a>
            <!-- LinkedIn -->
            <a href="{{ $leader['linkedin'] }}" target="_blank" class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-50 to-teal-50 hover:from-emerald-500 hover:to-teal-600 hover:text-white transition-all duration-300 flex items-center justify-center group/btn">
              <svg class="w-5 h-5 text-emerald-600 group-hover/btn:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5v-14c0-2.8-2.2-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.3c-1 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7-.8 1.7-1.7 1.7zm13.5 10.3h-3v-4.7c0-1.1 0-2.5-1.5-2.5s-1.8 1.2-1.8 2.4v4.8h-3v-9h2.9v1.2h.1c.4-.7 1.4-1.5 2.9-1.5 3.1 0 3.6 2 3.6 4.6v4.7z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>



  <!-- Organizational Chart Section -->
  <section class="py-20 px-4 lg:px-8">
    <div class="container mx-auto max-w-6xl">
      <div class="text-center mb-16">
        <h3 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
          Organizational Structure
        </h3>
        <p class="text-xl text-gray-600 font-light">Our structured approach to achieving excellence</p>
      </div>

      <div class="bg-white/80 backdrop-blur-sm border-0 shadow-2xl rounded-3xl overflow-hidden">
        <div class="p-12">
          <div class="bg-gradient-to-br from-gray-50 to-emerald-50 rounded-2xl p-8 min-h-[400px] flex items-center justify-center">  
              <img src="{{ asset('assets/images/about/organizational-chart.jpg') }}" alt="SRE UNAIR Organizational Structure">

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments Section -->
  <section class="py-20 px-4 lg:px-8 bg-gradient-to-br from-emerald-50 to-teal-50">
    <div class="container mx-auto max-w-7xl">
      <div class="text-center mb-16">
        <h3 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent mb-4">
          SRE UNAIR Departments
        </h3>
        <p class="text-xl text-gray-600 font-light">Specialized teams working towards our common goals</p>
      </div>

      <div class="relative">
        <div class="overflow-x-auto pb-4" style="scrollbar-width: none; -ms-overflow-style: none;">
          <div class="flex space-x-6 min-w-max px-4">
            @foreach([
              [
                'title' => 'Research & Development',
                'description' => 'Conducting research projects and developing innovative solutions in renewable energy.',
                'icon' => '<circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>'
              ],
              [
                'title' => 'Education & Training',
                'description' => 'Providing educational resources and training programs for members and the community.',
                'icon' => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>'
              ],
              [
                'title' => 'Project Management',
                'description' => 'Planning and executing sustainability projects on campus and in the community.',
                'icon' => '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>'
              ],
              [
                'title' => 'Media & Communications',
                'description' => 'Managing social media, website, and publications to raise awareness.',
                'icon' => '<path d="M3 11l18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>'
              ],
              [
                'title' => 'External Relations',
                'description' => 'Building partnerships with external organizations and stakeholders.',
                'icon' => '<path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><path d="M9 18h6"></path><path d="M10 22h4"></path>'
              ]
            ] as $dept)
            <div class="w-80 group hover:shadow-2xl transition-all duration-500 border-0 bg-white overflow-hidden rounded-2xl flex-shrink-0">
              <div class="h-48 bg-gradient-to-br from-emerald-100 to-teal-100 relative overflow-hidden">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="text-center text-emerald-600">
                    <div class="w-16 h-16 bg-white/80 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $dept['icon'] !!}
                      </svg>
                    </div>
                    <p class="font-medium">{{ $dept['title'] }} Photo</p>
                  </div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <div class="p-8">
                <h4 class="text-xl font-bold text-emerald-700 mb-3 group-hover:text-emerald-600 transition-colors">
                  {{ $dept['title'] }}
                </h4>
                <p class="text-gray-600 mb-6 leading-relaxed">{{ $dept['description'] }}</p>
                <a href="#" class="inline-block w-full text-center px-4 py-3 border-2 border-emerald-600 text-emerald-600 hover:bg-emerald-600 hover:text-white transition-all duration-300 rounded-xl font-medium bg-transparent">
                  Learn More
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Scroll buttons -->
        <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 rounded-full w-12 h-12 bg-white/90 shadow-lg border border-gray-200 hidden md:flex items-center justify-center hover:bg-white hover:shadow-xl transition-all duration-300" onclick="document.querySelector('.overflow-x-auto').scrollBy({left: -300, behavior: 'smooth'})">
          <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 rounded-full w-12 h-12 bg-white/90 shadow-lg border border-gray-200 hidden md:flex items-center justify-center hover:bg-white hover:shadow-xl transition-all duration-300" onclick="document.querySelector('.overflow-x-auto').scrollBy({left: 300, behavior: 'smooth'})">
          <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>
  </section>
</div>
@endsection