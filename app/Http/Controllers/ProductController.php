<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Categories::all();
        $selectedCategoryId = $request->input('category_id', $categories->first()->id);
        $products = Products::where('category_id', $selectedCategoryId)->get();
        return view('index', compact('categories', 'products', 'selectedCategoryId'));
    }

    public function about()
    {
        return view('about');
    }

    public function produk()
    {
        $products = Products::all();
        return view('produk', compact('products'));
    }


    public function show($id, Request $request)
    {
        $categories = Categories::all();
        $category = Categories::findOrFail($id);
        $selectedCategoryId = $id;
        $products = Products::where('category_id', $selectedCategoryId)->get();
        return view('index', compact('categories', 'selectedCategoryId', 'category', 'products'));
    }

    public function showProduct($id)
    {
        $products = Products::find($id);
        return view('product.show', compact('products'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('dashboard', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Model' => 'required|string',
            'Wire' => 'required|string',
            'Outside' => 'required|string',
            'Free_height' => 'required|string',
            'Solid_height' => 'required|string',
            'Spring_rate' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'Model' => $request->Model,
            'Wire' => $request->Wire,
            'Outside' => $request->Outside,
            'Free_height' => $request->Free_height,
            'Solid_height' => $request->Solid_height,
            'Spring_rate' => $request->Spring_rate,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    public function edit(Products $product)
    {
        $categories = Categories::all();
        return view('admin.products.form', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Model' => 'required|string',
            'Wire' => 'required|string',
            'Outside' => 'required|string',
            'Free_height' => 'required|string',
            'Solid_height' => 'required|string',
            'Spring_rate' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id'
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'Model' => $request->Model,
            'Wire' => $request->Wire,
            'Outside' => $request->Outside,
            'Free_height' => $request->Free_height,
            'Solid_height' => $request->Solid_height,
            'Spring_rate' => $request->Spring_rate,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Products $product)
    {
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }
        $product->delete();
        return redirect()->route('index')->with('success', 'Product deleted successfully');
    }
}
