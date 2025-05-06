@extends('layout')

@section('content')
<section class="bg-white text-gray-800">
  <div class="container mx-auto px-6 py-16 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Chic Lighting</h1>
    <p class="text-lg md:text-xl text-gray-600 mb-8">
      Illuminate your space with elegance and style.
    </p>
    <a href="{{ route('products.index') }}" class="inline-block bg-gray-800 text-white px-6 py-3 rounded hover:bg-gray-700 transition">
      Explore Products
    </a>
  </div>
</section>

<section class="bg-gray-100 py-16">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-semibold text-center mb-12">Our Collections</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded shadow p-6">
        <img src="{{ asset('images/collection1.jpg') }}" alt="Collection 1" class="mb-4 rounded">
        <h3 class="text-xl font-semibold mb-2">Modern Elegance</h3>
        <p class="text-gray-600">Sleek designs for contemporary spaces.</p>
      </div>
      <div class="bg-white rounded shadow p-6">
        <img src="{{ asset('images/collection2.jpg') }}" alt="Collection 2" class="mb-4 rounded">
        <h3 class="text-xl font-semibold mb-2">Classic Charm</h3>
        <p class="text-gray-600">Timeless pieces with a touch of tradition.</p>
      </div>
      <div class="bg-white rounded shadow p-6">
        <img src="{{ asset('images/collection3.jpg') }}" alt="Collection 3" class="mb-4 rounded">
        <h3 class="text-xl font-semibold mb-2">Outdoor Ambience</h3>
        <p class="text-gray-600">Illuminate your exterior spaces beautifully.</p>
      </div>
    </div>
  </div>
</section>
@endsection

