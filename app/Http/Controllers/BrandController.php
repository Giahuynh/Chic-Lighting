<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'label' => 'required',
            'description' => 'nullable',
            'logo' => 'nullable|string'
        ]);

        Brand::create($request->all());
        return redirect()->route('brands.index')->with('success', 'Successfully!');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return redirect()->route('brands.index')->with('success', 'Updated!');
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect()->route('brands.index')->with('success', 'Deleted!');
    }
}
