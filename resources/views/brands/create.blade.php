@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Thêm thương hiệu</h2>

<form action="{{ route('brands.store') }}" method="POST">
    @csrf
    <label>Tên</label>
    <input type="text" name="name" class="form-control mb-2" required>

    <label>Label</label>
    <input type="text" name="label" class="form-control mb-2" required>

    <label>Mô tả</label>
    <textarea name="description" class="form-control mb-2"></textarea>

    <label>Logo (URL)</label>
    <input type="text" name="logo" class="form-control mb-2">

    <button class="btn btn-success">Lưu</button>
    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Huỷ</a>
</form>
@endsection
