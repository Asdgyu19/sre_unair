@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">My Profile</h1>
            <p class="text-gray-600 mt-2">Manage your account information</p>
        </div>

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Cover Section -->
            <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-600 h-32 relative">
                <div class="absolute inset-0 bg-black bg-opacity-20"></div>
            </div>

            <!-- Profile Info Section -->
            <div class="relative px-8 py-8">
                <!-- Profile Photo -->
                <div class="absolute -top-16 left-8">
                    <div class="relative">
                        @if($user->profile_photo)
                            <img src="{{ Storage::url($user->profile_photo) }}" 
                                 alt="{{ $user->name }}" 
                                 class="w-24 h-24 rounded-full border-4 border-white shadow-lg object-cover">
                        @else
                            <div class="w-24 h-24 rounded-full border-4 border-white shadow-lg bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                                <span class="text-white text-2xl font-bold">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Action Button -->
                <div class="text-right mb-8">
                    <a href="{{ route('profile.edit') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Profile
                    </a>
                </div>

                <!-- Profile Details -->
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Personal Information -->
                    <div class="space-y-6">
                        <h3 class="text-xl font-semibold text-gray-900 border-b border-gray-200 pb-2">
                            Personal Information
                        </h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Full Name</label>
                                <p class="text-lg font-semibold text-gray-900">{{ $user->name }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Email Address</label>
                                <p class="text-lg text-gray-700">{{ $user->email }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Role</label>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                    @if($user->role === 'admin') bg-red-100 text-red-800
                                    @elseif($user->role === 'boend') bg-purple-100 text-purple-800
                                    @else bg-blue-100 text-blue-800 @endif">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Member Since</label>
                                <p class="text-lg text-gray-700">{{ $user->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Account Status -->
                    <div class="space-y-6">
                        <h3 class="text-xl font-semibold text-gray-900 border-b border-gray-200 pb-2">
                            Account Status
                        </h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Account Status</label>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                    <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Active
                                </span>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Last Updated</label>
                                <p class="text-lg text-gray-700">{{ $user->updated_at->format('F j, Y \a\t g:i A') }}</p>
                            </div>

                            @if($user->hasAdminAccess())
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Admin Access</label>
                                <a href="{{ route('admin.dashboard') }}" 
                                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                    </svg>
                                    Access Admin Panel
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Actions -->
        <div class="mt-8 bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="{{ route('profile.edit') }}" 
                   class="flex items-center p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-colors">
                    <svg class="w-8 h-8 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-gray-900">Edit Profile</h4>
                        <p class="text-sm text-gray-600">Update your information</p>
                    </div>
                </a>

                @if($user->hasAdminAccess())
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition-colors">
                    <svg class="w-8 h-8 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-gray-900">Admin Panel</h4>
                        <p class="text-sm text-gray-600">Manage the system</p>
                    </div>
                </a>
                @endif

                <form method="POST" action="{{ route('logout') }}" class="inline-block">
                    @csrf
                    <button type="submit" 
                            class="flex items-center p-4 w-full bg-red-50 rounded-xl hover:bg-red-100 transition-colors text-left">
                        <svg class="w-8 h-8 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Logout</h4>
                            <p class="text-sm text-gray-600">Sign out of your account</p>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection