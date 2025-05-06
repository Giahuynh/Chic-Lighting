<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic Lighting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
<body>
<header class="bg-white shadow-sm">
    <div class="container d-flex justify-content-between align-items-center py-3">
    <div class="d-flex align-items-center gap-2">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-header">
    <span class="fw-bold text-dark h5 mb-0">Chic Lighting</span>
</div>

        <nav class="d-flex gap-3">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'fw-bold' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'fw-bold' : '' }}">About</a>
            <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'fw-bold' : '' }}">Products</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'fw-bold' : '' }}">Contact</a>
        </nav>
    </div>
</header>


<main class="container py-4">
    @yield('content')
</main>
</body>
</html>
