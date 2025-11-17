@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Edit Profile</h1>
            <p class="text-gray-600 mt-2">Update your account information</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PATCH')

            <!-- Profile Photo Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Profile Photo</h2>
                
                <div class="flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-6">
                    <!-- Current Photo -->
                    <div class="flex-shrink-0">
                        <div id="current-photo" class="relative">
                            @if($user->profile_photo)
                                <img id="photo-preview" 
                                     src="{{ Storage::url($user->profile_photo) }}" 
                                     alt="{{ $user->name }}" 
                                     class="w-24 h-24 rounded-full object-cover border-4 border-gray-200 shadow-lg">
                            @else
                                <div id="photo-preview" class="w-24 h-24 rounded-full border-4 border-gray-200 shadow-lg bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                                    <span class="text-white text-2xl font-bold">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Photo Upload Controls -->
                    <div class="flex-1 space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Upload New Photo
                            </label>
                            <div class="flex items-center space-x-4">
                                <input type="file" 
                                       name="profile_photo" 
                                       id="profile_photo"
                                       accept="image/*"
                                       class="hidden"
                                       onchange="previewPhoto(event)">
                                <label for="profile_photo" 
                                       class="cursor-pointer inline-flex items-center px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Choose Photo
                                </label>
                            </div>
                            @error('profile_photo')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">JPG, JPEG, PNG up to 2MB</p>
                        </div>

                        @if($user->profile_photo)
                            <div>
                                <button type="button" 
                                        onclick="deletePhoto()"
                                        class="inline-flex items-center px-4 py-2 bg-red-100 text-red-700 font-medium rounded-lg hover:bg-red-200 transition-colors">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Delete Current Photo
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Personal Information Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Personal Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name *
                        </label>
                        <input type="text" 
                               name="name" 
                               id="name" 
                               value="{{ old('name', $user->name) }}"
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address *
                        </label>
                        <input type="email" 
                               name="email" 
                               id="email" 
                               value="{{ old('email', $user->email) }}"
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Change Password Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Change Password</h2>
                <p class="text-gray-600 mb-6">Leave blank to keep current password</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Current Password -->
                    <div class="md:col-span-2">
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                            Current Password
                        </label>
                        <input type="password" 
                               name="current_password" 
                               id="current_password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('current_password') border-red-500 @enderror">
                        @error('current_password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- New Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            New Password
                        </label>
                        <input type="password" 
                               name="password" 
                               id="password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm New Password
                        </label>
                        <input type="password" 
                               name="password_confirmation" 
                               id="password_confirmation"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                    <a href="{{ route('profile.show') }}" 
                       class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Cancel
                    </a>

                    <button type="submit" 
                            class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Update Profile
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Delete Photo Form (Hidden) -->
<form id="delete-photo-form" method="POST" action="{{ route('profile.delete-photo') }}" class="hidden">
    @csrf
    @method('DELETE')
</form>

<script>
function previewPhoto(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('photo-preview');
            preview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="w-24 h-24 rounded-full object-cover border-4 border-gray-200 shadow-lg">`;
        };
        reader.readAsDataURL(file);
    }
}

function deletePhoto() {
    if (confirm('Are you sure you want to delete your profile photo?')) {
        document.getElementById('delete-photo-form').submit();
    }
}
</script>
@endsection