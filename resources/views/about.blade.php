@extends('layouts.app')

@section('content')
<section class="w-full bg-gradient-to-b from-white to-green-50 py-16">
  <div class="container mx-auto px-4">
    <!-- About Us Header -->
    <div class="mb-12 text-center">
      <h2 class="text-3xl font-bold text-green-700 mb-2">About Us</h2>
      <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
      <p class="text-gray-600 max-w-2xl mx-auto">
        SRE UNAIR is a student organization dedicated to fostering excellence in sustainable resource management and
        environmental stewardship at Universitas Airlangga.
      </p>
    </div>

    <!-- Key Features -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
      <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
        <h3 class="text-xl font-semibold text-green-700 mb-4">Our Vision</h3>
        <p class="text-gray-600">
          To become a leading student organization that promotes sustainable resource management and environmental
          awareness within the university and broader community.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
        <h3 class="text-xl font-semibold text-green-700 mb-4">Our Mission</h3>
        <p class="text-gray-600">
          To educate, engage, and empower students through innovative programs, research opportunities, and
          community initiatives focused on environmental sustainability.
        </p>
      </div>
    </div>

    <!-- Core Values -->
    <div class="mb-16">
      <h3 class="text-2xl font-bold text-green-700 text-center mb-8">Our Core Values</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="font-semibold text-green-700 mb-2">Sustainability</h4>
          <p class="text-gray-600 text-sm">
            Promoting practices that meet present needs without compromising future generations.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h4 class="font-semibold text-green-700 mb-2">Collaboration</h4>
          <p class="text-gray-600 text-sm">
            Working together with diverse stakeholders to achieve common environmental goals.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
          </div>
          <h4 class="font-semibold text-green-700 mb-2">Excellence</h4>
          <p class="text-gray-600 text-sm">
            Striving for the highest standards in all our initiatives and programs.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <h4 class="font-semibold text-green-700 mb-2">Education</h4>
          <p class="text-gray-600 text-sm">
            Sharing knowledge and raising awareness about environmental issues.
          </p>
        </div>
      </div>
    </div>

    <!-- Leadership Section -->
    <div class="mb-16">
      <h3 class="text-2xl font-bold text-green-700 text-center mb-8">Our Leadership</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="col-span-1 md:col-span-2 lg:col-span-4 text-center mb-6">
          <h4 class="inline-block bg-green-700 text-white px-6 py-2 rounded-full text-lg font-semibold mb-2">
            President
          </h4>
        </div>
        <div class="col-span-1 md:col-span-2 lg:col-span-4 flex flex-col md:flex-row items-center justify-center gap-8">
          <div class="w-full max-w-xs bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative h-64 w-full">
              <img src="{{ asset('images/placeholder-president.jpg') }}" alt="President" class="object-cover w-full h-full">
            </div>
            <div class="p-4 text-center">
              <h5 class="font-bold text-green-700">Anisa Putri</h5>
              <p class="text-gray-600 text-sm mb-2">Environmental Science</p>
              <div class="flex justify-center space-x-2">
                <a href="#" class="text-gray-500 hover:text-green-700">
                  <span class="sr-only">Instagram</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-green-700">
                  <span class="sr-only">LinkedIn</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div class="w-full max-w-xs bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative h-64 w-full">
              <img src="{{ asset('images/placeholder-vice-president.jpg') }}" alt="Vice President" class="object-cover w-full h-full">
            </div>
            <div class="p-4 text-center">
              <h5 class="font-bold text-green-700">Budi Santoso</h5>
              <p class="text-gray-600 text-sm mb-2">Conservation Biology</p>
              <div class="flex justify-center space-x-2">
                <a href="#" class="text-gray-500 hover:text-green-700">
                  <span class="sr-only">Instagram</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-green-700">
                  <span class="sr-only">LinkedIn</span>
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Departments Section -->
    <div class="mb-16">
      <h3 class="text-2xl font-bold text-green-700 text-center mb-8">SRE Departments</h3>
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
          <thead class="bg-green-700 text-white">
            <tr>
              <th class="py-3 px-4 text-left">Department</th>
              <th class="py-3 px-4 text-left">Focus Area</th>
              <th class="py-3 px-4 text-left">Activities</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-green-50">
              <td class="py-3 px-4 font-medium">Research & Development</td>
              <td class="py-3 px-4">Environmental Studies</td>
              <td class="py-3 px-4">Conducting research projects, publishing findings</td>
            </tr>
            <tr class="hover:bg-green-50">
              <td class="py-3 px-4 font-medium">Education & Outreach</td>
              <td class="py-3 px-4">Community Engagement</td>
              <td class="py-3 px-4">Workshops, seminars, awareness campaigns</td>
            </tr>
            <tr class="hover:bg-green-50">
              <td class="py-3 px-4 font-medium">Project Management</td>
              <td class="py-3 px-4">Sustainability Initiatives</td>
              <td class="py-3 px-4">Campus greening, waste management programs</td>
            </tr>
            <tr class="hover:bg-green-50">
              <td class="py-3 px-4 font-medium">Media & Communications</td>
              <td class="py-3 px-4">Digital Presence</td>
              <td class="py-3 px-4">Social media, website, publications</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Our Activities -->
    <div class="mb-16">
      <h3 class="text-2xl font-bold text-green-700 text-center mb-8">Our Activities</h3>
      <div class="relative h-64 w-full rounded-lg overflow-hidden mb-6">
        <img src="{{ asset('images/activities.jpg') }}" alt="SRE Activities" class="object-cover w-full h-full">
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="font-semibold text-green-700 mb-2">Campus Clean-up Drive</h4>
          <p class="text-gray-600 mb-4">
            Regular initiatives to maintain campus cleanliness and promote proper waste disposal.
          </p>
          <a href="#" class="text-green-600 hover:text-green-800 inline-flex items-center">
            Learn more 
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="font-semibold text-green-700 mb-2">Environmental Workshops</h4>
          <p class="text-gray-600 mb-4">
            Educational sessions on sustainability practices, conservation, and environmental awareness.
          </p>
          <a href="#" class="text-green-600 hover:text-green-800 inline-flex items-center">
            Learn more 
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="font-semibold text-green-700 mb-2">Research Symposium</h4>
          <p class="text-gray-600 mb-4">
            Annual event showcasing student research on environmental topics and sustainable solutions.
          </p>
          <a href="#" class="text-green-600 hover:text-green-800 inline-flex items-center">
            Learn more 
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Partners Section -->
    <div>
      <h3 class="text-2xl font-bold text-green-700 text-center mb-8">Our Partners</h3>
      <div class="bg-white rounded-lg shadow-md p-8">
        <div class="text-center mb-6">
          <div class="inline-block bg-green-100 rounded-full p-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="text-lg font-semibold text-green-700 mt-2">Working Together for a Sustainable Future</h4>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
          <div class="grayscale hover:grayscale-0 transition-all">
            <img src="{{ asset('images/partner1.png') }}" alt="Partner 1" class="object-contain h-20">
          </div>
          <div class="grayscale hover:grayscale-0 transition-all">
            <img src="{{ asset('images/partner2.png') }}" alt="Partner 2" class="object-contain h-20">
          </div>
          <div class="grayscale hover:grayscale-0 transition-all">
            <img src="{{ asset('images/partner3.png') }}" alt="Partner 3" class="object-contain h-20">
          </div>
          <div class="grayscale hover:grayscale-0 transition-all">
            <img src="{{ asset('images/partner4.png') }}" alt="Partner 4" class="object-contain h-20">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
