@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-center text-gray-900 mb-10">Our Products</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="{{ asset('images/product-default.jpg') }}" alt="{{ $product->name }}" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-900">{{ $product->name }}</h3>
                    <p class="text-xs text-gray-500 mb-1">{{ $product->brand->name ?? 'No Brand' }}</p>
                    <p class="text-base font-bold text-red-500 mb-2">${{ number_format($product->price, 2) }}</p>
                    <a href="#" class="text-blue-600 text-sm hover:underline">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
