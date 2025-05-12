@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Danh sách thương hiệu</h2>

<a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">+ Thêm thương hiệu</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Tên</th>
            <th>Label</th>
            <th>Logo</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->label }}</td>
            <td><img src="{{ $brand->logo }}" width="60"></td>
            <td>
                <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Xoá thương hiệu này?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
