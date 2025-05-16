@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm sản phẩm</h2>
    <form action="{{ route('products.store') }}" method="POST">@csrf
        <div class="mb-3">
            <label>Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Giá</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <button class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
