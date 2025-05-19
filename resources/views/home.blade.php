@extends('layout')

@section('content')
    {{-- Hero --}}
    <section class="relative w-full h-screen bg-center bg-cover bg-no-repeat bg-white text-center py-24 px-6 lg:px-24"
        style="background-image: url('{{ asset('images/banner-background.jpg') }}') ">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative z-10">
            <h1 class="text-5xl text-white font-bold leading-tight mb-4 font-serif">ILLUMINATE WITH STYLE</h1>
            <div class="flex justify-center">
                <div class="btn-glow-wrapper">
                    <a href="{{ route('products.index') }}" class="btn-glow-content">
                        Explore Products
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="py-20 px-6 lg:px-24">
        <h2 class="text-3xl font-bold text-center mb-12 font-serif">Popular Lighting Collections</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-8 text-center">
            @php
                $products = [
                    ['img' => 'ceilinglamp.png', 'title' => 'Ceiling Lamp'],
                    ['img' => 'chandelier.png', 'title' => 'Chandelier'],
                    ['img' => 'desklamp.png', 'title' => 'Desk Lamp'],
                    ['img' => 'floorlamp.png', 'title' => 'Floor Lamp'],
                    ['img' => 'projectorlamp.png', 'title' => 'Track Light'],
                    ['img' => 'walllamp.png', 'title' => 'Wall Lamp'],
                ];
            @endphp

            @foreach ($products as $product)
                <div class="hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <img src="{{ asset('images/' . $product['img']) }}" alt="{{ $product['title'] }}" class="mx-auto h-24 mb-2">
                    <p class="text-sm text-gray-700 font-serif font-bold">{{ $product['title'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- About --}}
    <section class="bg-gray-100 py-20 px-6 lg:px-24">
        <div class="w-full h-full grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4 font-serif">Designed to Inspire</h2>
                <p class="text-gray-600 mb-6 font-serif">
                    At Chic Lighting, we blend craftsmanship and innovation to create lighting solutions that elevate every
                    space.
                    From cozy reading corners to luxurious interiors, our lights bring warmth and elegance.
                </p>
                <a href="{{ route('about') }}" class="text-blue-600 hover:underline font-serif">Learn More About Us</a>
            </div>
            <div>
                <img src="{{ asset('images/about.jpg') }}" alt="About Chic Lighting" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section class="bg-gray-100 py-20 px-6 lg:px-24">
        <h2 class="text-3xl font-bold text-center mb-4 font-serif">Lighting Projects</h2>
        <p class="text-center text-gray-600 text-lg mb-12 font-serif font-bold">
            Real-world lighting designs that inspire and elevate every space.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset("images/project$i.jpg") }}" alt="Project {{ $i }}"
                        class="w-full h-56 object-cover cursor-zoom-in project-image"
                        onclick="openModal('{{ asset("images/project$i.jpg") }}')">
                </div>
            @endfor
        </div>

        {{-- Modal --}}
        <div id="imageModal"
            class="fixed inset-0 bg-black/70 z-50 hidden flex items-center justify-center opacity-0 transition-opacity duration-700">
            <div id="modalContent" class="relative opacity-0 scale-90 transition-all duration-700">
                <img id="modalImg"
                    class="max-h-[85vh] max-w-[90vw] mx-auto block rounded-lg shadow-xl object-contain pointer-events-auto">
            </div>
        </div>
    </section>
@endsection