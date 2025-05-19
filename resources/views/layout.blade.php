<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic Lighting</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white text-gray-900">

    <!-- Header -->
    <header class="w-full bg-white shadow-sm border-b">
        <div class="flex items-center justify-between w-full px-6 lg:px-24 py-3">
            <!-- Logo + Brand name + Menu -->
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="max-h-24 w-auto">
                    <span class="text-xl font-semibold text-gray-900 hover:text-blue-600 font-serif">Chic Lighting</span>
                </a>
                <nav class="flex space-x-6 text-sm font-medium">
                    <a href="{{ route('products.index') }}"
                        class="flex items-center gap-1 {{ request()->routeIs('products.*') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }} font-serif">
                        <i class="fas fa-bars"></i>
                        Categories
                    </a>
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }} font-serif">About</a>


                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }} font-serif">Contact</a>
                </nav>
            </div>

            <!-- Icons -->
            <div class="flex items-center space-x-5 text-gray-600">
                <i class="fas fa-search w-6 h-6 hover:text-blue-500 cursor-pointer"></i>
                <i class="fas fa-shopping-cart w-6 h-6 hover:text-blue-500 cursor-pointer"></i>
                <i class="fas fa-user w-6 h-6 hover:text-blue-500 cursor-pointer" onclick="toggleAuthModal()"></i>
            </div>
        </div>
    </header>
    <!-- Login Popup Modal -->
<div id="authModal"
     class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center opacity-0 transition-opacity duration-700">
    <div id="authModalInner"
         class="bg-white w-full max-w-sm rounded-xl shadow-xl p-6 relative opacity-0 scale-90 transition-all duration-700">
        <!-- Close -->
        <button onclick="toggleAuthModal()"
                class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-lg">
            <i class="fas fa-times"></i>
        </button>
        <div class="text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 mx-auto mb-4">
            <h3 class="text-xl font-semibold mb-2">Welcome to Chic Lighting</h3>
            <p class="text-sm text-gray-500 mb-6">Please choose a login method</p>
            <div class="flex space-x-4 justify-center">
                <a href="{{ route('register') }}"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-md text-sm">Register</a>
                <a href="{{ route('login') }}"
                   class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm">Login</a>
            </div>
        </div>
    </div>
</div>

    <!-- Content -->
    <main class="w-full h-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 text-sm mt-16">
        <div class="w-full px-6 lg:px-24 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">
            <!-- About -->
            <div class="md:col-span-2">
                <p class="mb-4">
                    Chic Lighting designs, develops, and delivers high-quality lighting fixtures for hospitality,
                    residential, and cultural spaces. Our products combine refined aesthetics with technical precision,
                    offering solutions that enhance visual comfort and style.
                </p>
                <p>
                    Based in Vietnam, we serve global professionals with elegant, modern lighting to elevate any space.
                </p>
                <div class="flex items-center gap-4 mt-4">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>

            <!-- Products -->
            <div>
                <h4 class="text-white font-semibold mb-4">PRODUCTS</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Ceiling Lamps</a></li>
                    <li><a href="#" class="hover:underline">Chandeliers</a></li>
                    <li><a href="#" class="hover:underline">Desk Lamps</a></li>
                    <li><a href="#" class="hover:underline">Floor Lamps</a></li>
                    <li><a href="#" class="hover:underline">Wall Lamps</a></li>
                    <li><a href="#" class="hover:underline">Track Lighting</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4">CONTACT</h4>
                <p class="mb-2">Chic Lighting Co., Ltd.</p>
                <p class="mb-2">123 Decor Avenue, District 1</p>
                <p class="mb-2">Ho Chi Minh City, Vietnam</p>
                <p class="mb-2">+84 28 1234 5678</p>
                <p>info@chiclighting.vn</p>
            </div>
        </div>

        <div class="border-t border-gray-700 text-center py-4 text-xs text-gray-500">
            &copy; 2025 Chic Lighting. All Rights Reserved.
        </div>
    </footer>

</body>

</html>
