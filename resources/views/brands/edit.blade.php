@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Sửa thương hiệu</h2>

<form action="{{ route('brands.update', $brand->id) }}" method="POST">
    @csrf @method('PUT')

    <label>Tên</label>
    <input type="text" name="name" class="form-control mb-2" value="{{ $brand->name }}" required>

    <label>Label</label>
    <input type="text" name="label" class="form-control mb-2" value="{{ $brand->label }}" required>

    <label>Mô tả</label>
    <textarea name="description" class="form-control mb-2">{{ $brand->description }}</textarea>

    <label>Logo (URL)</label>
    <input type="text" name="logo" class="form-control mb-2" value="{{ $brand->logo }}">

    <button class="btn btn-success">Cập nhật</button>
    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Huỷ</a>
</form>
@endsection
