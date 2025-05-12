@extends('layouts.app')

@section('content')
<section class="w-full bg-gradient-to-b from-[#045947] via-[#0b9174] to-[#e6f7f2] py-20 text-white">
  <div class="container mx-auto px-4 lg:px-20">
    <!-- About Us Header -->
    <div class="mb-16 text-center">
      <h2 class="text-5xl font-bold mb-6">About Us</h2>
      <div class="w-28 h-1 bg-white mx-auto mb-8"></div>
      <p class="text-lg max-w-4xl mx-auto leading-relaxed text-gray-200">
        Universitas Airlangga's Society of Renewable Energy (SRE UNAIR) is a student organization dedicated to promoting sustainable energy solutions and environmental awareness. We strive to educate, innovate, and inspire the next generation of renewable energy leaders.
      </p>
    </div>

    <!-- Vision & Mission -->
    <div class="bg-white rounded-2xl shadow-lg py-16 px-8 lg:px-20 text-black">
      <!-- Vision -->
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-green-700 mb-6">VISION</h2>
        <p class="text-xl text-gray-600">
          Establish SRE UNAIR as a center for education and innovation in renewable energy, creating a generation of competent, competitive, and impactful contributors to sustainable development in Indonesia.
        </p>
      </div>
      
      <!-- Mission -->
      <div>
        <h2 class="text-4xl font-bold text-green-700 text-center mb-12">MISSION</h2>
        <div class="grid gap-12 lg:grid-cols-2">
          <div class="flex items-start gap-6">
            <div class="bg-green-700 text-white rounded-full w-16 h-16 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
              </svg>
            </div>
            <p class="text-lg text-gray-600">
              Empower members to become change agents in renewable energy through innovative education and training programs.
            </p>
          </div>
          <div class="flex items-start gap-6">
            <div class="bg-green-700 text-white rounded-full w-16 h-16 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
              </svg>
            </div>
            <p class="text-lg text-gray-600">
              Offer opportunities for members to engage in research and innovation, contributing impactful solutions for society.
            </p>
          </div>
          <div class="flex items-start gap-6">
            <div class="bg-green-700 text-white rounded-full w-16 h-16 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
              </svg>
            </div>
            <p class="text-lg text-gray-600">
              Foster members' growth with a hands-on curriculum, equipping them to understand and teach renewable energy concepts effectively.
            </p>
          </div>
          <div class="flex items-start gap-6">
            <div class="bg-green-700 text-white rounded-full w-16 h-16 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
              </svg>
            </div>
            <p class="text-lg text-gray-600">
              Apply knowledge and skills through community service and educational programs, raising awareness about renewable energy.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Leadership Section -->
    <div class="mb-20">
      <h3 class="text-3xl font-bold text-green-700 text-center mb-12">Our Leadership</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- President -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
          <div class="h-80 bg-gray-200 relative">
            <!-- User will add their own photo -->
            <div class="absolute inset-0 flex items-center justify-center text-gray-500">
              <p>President Photo</p>
            </div>
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-bold text-green-700 mb-1">President</h4>
            <p class="text-gray-600 mb-4">Name will be added</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-green-700 hover:text-green-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="#" class="text-green-700 hover:text-green-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Vice President -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
          <div class="h-80 bg-gray-200 relative">
            <!-- User will add their own photo -->
            <div class="absolute inset-0 flex items-center justify-center text-gray-500">
              <p>Vice President Photo</p>
              <p class="text-gray-600 mb-4">Name will be added</p>
            </div>
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-bold text-green-700 mb-1">Vice President</h4>
            <p class="text-gray-600 mb-4">Name will be added</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-green-700 hover:text-green-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="#" class="text-green-700 hover:text-green-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Secretary -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
          <div class="h-80 bg-gray-200 relative">
            <!-- User will add their own photo -->
            <div class="absolute inset-0 flex items-center justify-center text-gray-500">
              <p>Secretary Photo</p>
            </div>
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-bold text-green-700 mb-1">Secretary</h4>
            <p class="text-gray-600 mb-4">Name will be added</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-green-700 hover:text-green-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="#" class="text-green-700 hover:text-green-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Organizational Chart Section -->
    <div class="mb-20">
      <h3 class="text-3xl font-bold text-green-700 text-center mb-12">Organizational Structure</h3>
      <div class="bg-white rounded-lg shadow-md p-8">
        <!-- Placeholder for organizational chart - user will add their own image -->
        <div class="bg-gray-100 rounded-lg p-4">
          <img src="{{ asset('images/organizational-chart.png') }}" alt="SRE UNAIR Organizational Structure" class="w-full">
        </div>
      </div>
    </div>

    <!-- Departments Section -->
    <div>
      <h3 class="text-3xl font-bold text-green-700 text-center mb-12">SRE UNAIR Departments</h3>
      
      <div class="relative">
        <div class="overflow-x-auto pb-4" style="scrollbar-width: none; -ms-overflow-style: none;">
          <div class="flex space-x-6 min-w-max px-4">
            <!-- Department Cards -->
            <div class="w-72 bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
              <div class="h-48 bg-gray-200 relative">
                <!-- User will add their own photo -->
                <div class="absolute inset-0 flex items-center justify-center text-gray-500">
                  <p>Research & Development Photo</p>
                </div>
              </div>
              <div class="p-6">
                <h4 class="text-xl font-bold text-green-700 mb-2">Research & Development</h4>
                <p class="text-gray-600 mb-4">Conducting research projects and developing innovative solutions in renewable energy.</p>
                <a href="#" class="inline-block px-4 py-2 border border-green-700 text-green-700 rounded hover:bg-green-700 hover:text-white transition-colors">
                  Learn More
                </a>
              </div>
            </div>

            <div class="w-72 bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
              <div class="h-48 bg-gray-200 relative">
                <!-- User will add their own photo -->
                <div class="absolute inset-0 flex items-center justify-center text-gray-500">
                  <p>Education & Training Photo</p>
                </div>
              </div>
              <div class="p-6">
                <h4 class="text-xl font-bold text-green-700 mb-2">Education & Training</h4>
                <p class="text-gray-600 mb-4">Providing educational resources and training programs for members and the community.</p>
                <a href="#" class="inline-block px-4 py-2 border border-green-700 text-green-700 rounded hover:bg-green-700 hover:text-white transition-colors">
                  Learn More
                </a>
              </div>
            </div>

            <div class="w-72 bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
              <div class="h-48 bg-gray-200 relative">
                <!-- User will add their own photo -->
                <div class="absolute inset-0 flex items-center justify-center text-gray-500">
                  <p>Project Management Photo</p>
                </div>
              </div>
              <div class="p-6">
                <h4 class="text-xl font-bold text-green-700 mb-2">Project Management</h4>
                <p class="text-gray-600 mb-4">Planning and executing sustainability projects on campus and in the community.</p>
                <a href="#" class="inline-block px-4 py-2 border border-green-700 text-green-700 rounded hover:bg-green-700 hover:text-white transition-colors">
                  Learn More
                </a>
              </div>
            </div>

            <div class="w-72 bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
              <div class="h-48 bg-gray-200 relative">
                <!-- User will add their own photo -->
                <div class="absolute inset-0 flex items-center justify-center text-gray-500">
                  <p>Media & Communications Photo</p>
                </div>
              </div>
              <div class="p-6">
                <h4 class="text-xl font-bold text-green-700 mb-2">Media & Communications</h4>
                <p class="text-gray-600 mb-4">Managing social media, website, and publications to raise awareness.</p>
                <a href="#" class="inline-block px-4 py-2 border border-green-700 text-green-700 rounded hover:bg-green-700 hover:text-white transition-colors">
                  Learn More
                </a>
              </div>
            </div>

            <div class="w-72 bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
              <div class="h-48 bg-gray-200 relative">
                <!-- User will add their own photo -->
                <div class="absolute inset-0 flex items-center justify-center text-gray-500">
                  <p>External Relations Photo</p>
                </div>
              </div>
              <div class="p-6">
                <h4 class="text-xl font-bold text-green-700 mb-2">External Relations</h4>
                <p class="text-gray-600 mb-4">Building partnerships with external organizations and stakeholders.</p>
                <a href="#" class="inline-block px-4 py-2 border border-green-700 text-green-700 rounded hover:bg-green-700 hover:text-white transition-colors">
                  Learn More
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Scroll buttons (optional) -->
        <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 rounded-full w-10 h-10 flex items-center justify-center bg-white/80 shadow-lg border border-gray-200 hidden md:flex" onclick="document.querySelector('.overflow-x-auto').scrollBy({left: -300, behavior: 'smooth'})">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>

        <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 rounded-full w-10 h-10 flex items-center justify-center bg-white/80 shadow-lg border border-gray-200 hidden md:flex" onclick="document.querySelector('.overflow-x-auto').scrollBy({left: 300, behavior: 'smooth'})">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>
@endsection
