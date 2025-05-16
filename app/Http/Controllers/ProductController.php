<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create() {
        return view('admin.products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($request->only('name', 'description', 'price'));

        return redirect()->route('products.index')->with('success', 'Đã thêm sản phẩm.');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->only('name', 'description', 'price'));

        return redirect()->route('products.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy($id) {
        Product::destroy($id);
        return redirect()->route('products.index')->with('success', 'Đã xóa sản phẩm.');
    }
    public function shop() {
    $products = Product::with('brand')->where('is_active', 1)->get();
    return view('products.shop', compact('products'));
}

}

