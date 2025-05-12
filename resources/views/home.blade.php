@extends('layout')

@section('content')
    {{-- Hero --}}
    <section class="relative bg-white text-center py-24 px-6 lg:px-24">
        <div class="w-full">
            <h1 class="text-5xl font-bold leading-tight mb-4">Illuminate with Style</h1>
            <p class="text-lg text-gray-600 mb-8">Where timeless elegance meets modern lighting design</p>
            <a href="{{ route('products.index') }}"
               class="inline-block bg-black text-white px-6 py-3 rounded hover:bg-gray-800 transition">
                Explore Products
            </a>
        </div>
    </section>

    {{-- About --}}
    <section class="bg-gray-100 py-20 px-6 lg:px-24">
        <div class="w-full grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4">Designed to Inspire</h2>
                <p class="text-gray-600 mb-6">
                    At Chic Lighting, we blend craftsmanship and innovation to create lighting solutions that elevate every space.
                    From cozy reading corners to luxurious interiors, our lights bring warmth and elegance.
                </p>
                <a href="{{ route('about') }}" class="text-blue-600 hover:underline">Learn More About Us</a>
            </div>
            <div>
                <img src="{{ asset('images/about-section.jpg') }}" alt="About Chic Lighting" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="py-20 px-6 lg:px-24">
        <h2 class="text-3xl font-bold text-center mb-12">Popular Lighting Collections</h2>
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
                <div class="hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/' . $product['img']) }}" alt="{{ $product['title'] }}"
                         class="mx-auto h-24 mb-2">
                    <p class="text-sm text-gray-700">{{ $product['title'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Projects --}}
    <section class="bg-gray-100 py-20 px-6 lg:px-24">
        <h2 class="text-3xl font-bold text-center mb-4">Lighting Projects</h2>
        <p class="text-center text-gray-600 text-lg mb-12">
            Real-world lighting designs that inspire and elevate every space.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset("images/project$i.jpg") }}" alt="Project {{ $i }}"
                         class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">Project {{ $i }}</h3>
                        <p class="text-gray-600 text-sm">
                            A showcase of elegant lighting design in modern spaces.
                        </p>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection

