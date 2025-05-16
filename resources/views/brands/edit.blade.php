@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cập nhật sản phẩm</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">@csrf @method('PUT')
        <div class="mb-3">
            <label>Tên sản phẩm</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Giá</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
