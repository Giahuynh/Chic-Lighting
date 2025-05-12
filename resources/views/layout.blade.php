<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic Lighting</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white text-gray-900">

    <!-- Header -->
    <header class="w-full bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-2">
            <!-- Logo + Menu -->
            <div class="flex items-center space-x-8">
                <div class="h-12 overflow-hidden flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="max-h-16 w-auto">
                </div>
                <nav class="flex space-x-6 text-sm font-medium">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }}">Home</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }}">About</a>
                    <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }}">Products</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-600' : 'text-gray-800 hover:text-blue-500' }}">Contact</a>
                </nav>
            </div>

            <!-- Icons -->
            <div class="flex items-center space-x-5 text-gray-600">
                <!-- Search -->
                <i class="fas fa-search w-6 h-6 hover:text-blue-500 cursor-pointer"></i>
                <!-- Cart -->
                <i class="fas fa-shopping-cart w-6 h-6 hover:text-blue-500 cursor-pointer"></i>
                <!-- User -->
                <i class="fas fa-user w-6 h-6 hover:text-blue-500 cursor-pointer"></i>
            </div>
        </div>
    </header>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-6 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 text-sm mt-16">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">
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
