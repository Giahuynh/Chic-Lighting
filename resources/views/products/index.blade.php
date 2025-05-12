@extends('layout')

@section('content')
  <h1>Product List</h1>

  <a href="{{ route('products.create') }}">Add Product</a>

  <table border="1" cellpadding="8" cellspacing="0">
    <thead>
      <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Active</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->brand->name ?? 'N/A' }}</td>
          <td>{{ number_format($product->price, 2) }}</td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->is_active ? 'Yes' : 'No' }}</td>
          <td>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Delete this product?')">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="6">No products available.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
