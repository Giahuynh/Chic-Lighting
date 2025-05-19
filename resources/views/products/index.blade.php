@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Product List</h1>
        <a href="{{ route('products.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">
            + Add Product
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow border">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50 text-gray-700 text-sm uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-3 text-left">Name</th>
                    <th class="px-6 py-3 text-left">Brand</th>
                    <th class="px-6 py-3 text-left">Price</th>
                    <th class="px-6 py-3 text-left">Quantity</th>
                    <th class="px-6 py-3 text-left">Active</th>
                    <th class="px-6 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3">{{ $product->name }}</td>
                        <td class="px-6 py-3">{{ $product->brand->name ?? 'N/A' }}</td>
                        <td class="px-6 py-3">${{ number_format($product->price, 2) }}</td>
                        <td class="px-6 py-3">{{ $product->quantity }}</td>
                        <td class="px-6 py-3">{{ $product->is_active ? 'Yes' : 'No' }}</td>
                        <td class="px-6 py-3">
                            <a href="{{ route('products.edit', $product->id) }}"
                               class="text-indigo-600 hover:text-indigo-800 mr-3">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center px-6 py-4 text-gray-500">No products available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
