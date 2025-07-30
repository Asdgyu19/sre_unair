<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <title>EcoEnergy - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E9671',
                        secondary: '#FFC107',
                        'eco-green': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            300: '#86efac',
                            400: '#4ade80',
                        },
                        'sky-blue': {
                            50: '#f0f9ff',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-gradient-to-br from-eco-green-50 via-sky-blue-50 to-eco-green-100">
    
    <a href="/" title="Back to Home"
        class="absolute top-6 left-6 z-10 bg-white h-12 w-12 rounded-full flex items-center justify-center shadow-lg hover:bg-gray-100 transition-all duration-200">
        <i class="fas fa-home text-primary text-xl"></i>
    </a>

    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-32 h-32 rounded-full bg-eco-green-400"></div>
        <div class="absolute top-32 right-20 w-24 h-24 rounded-full bg-sky-blue-400"></div>
        <div class="absolute bottom-20 left-32 w-40 h-40 rounded-full bg-eco-green-300"></div>
        <div class="absolute bottom-32 right-10 w-28 h-28 rounded-full bg-sky-blue-300"></div>
    </div>

    <div class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <div class="mx-auto h-20 w-20 rounded-full flex items-center justify-center mb-6 shadow-lg bg-white">
                     <img src="{{ asset('/assets/images/logo.png') }}" alt="logo SRE Unair"
                         class="h-16 w-16 object-contain">
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Create Your Account</h2>
                <p class="text-gray-600">Join to power a sustainable future</p>
            </div>

            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-white/20">
                <form class="space-y-4" action="{{ route('register') }}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-user text-primary mr-2"></i>
                            Full Name
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required
                            class="w-full px-4 py-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors duration-200 bg-white/50"
                            placeholder="Enter your full name">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-envelope text-primary mr-2"></i>
                            Email Address
                        </label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required
                            class="w-full px-4 py-3 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors duration-200 bg-white/50"
                            placeholder="Enter your email">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-lock text-primary mr-2"></i>
                            Password
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" autocomplete="new-password" required
                                class="w-full px-4 py-3 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors duration-200 bg-white/50 pr-12"
                                placeholder="Enter your password">
                            <button type="button"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600"
                                onclick="togglePassword('password', 'toggleIcon')">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-lock text-primary mr-2"></i>
                            Confirm Password
                        </label>
                        <div class="relative">
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-colors duration-200 bg-white/50 pr-12"
                                placeholder="Confirm your password">
                            <button type="button"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600"
                                onclick="togglePassword('password_confirmation', 'toggleConfirmIcon')">
                                <i class="fas fa-eye" id="toggleConfirmIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-primary hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all duration-200 transform hover:scale-[1.02]">
                        Create Account
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login.form') }}" class="font-medium text-secondary hover:text-opacity-90">
                            Sign In
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
