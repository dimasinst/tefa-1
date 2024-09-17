<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('index', compact('categories', 'products'));
    }

    public function create()
    {
        $categories = categories::all(); // Pastikan model kategori benar
        return view('admin.products.form', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'spek' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id' // Perbarui validasi
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'spek' => $request->spek,
            'categories_id' => $request->category_id, // Perbarui nama kolom
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    public function edit(Products $product)
    {
        $categories = categories::all(); // Pastikan model kategori benar
        return view('admin.products.form', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'spek' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id' // Perbarui validasi
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
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
            'spek' => $request->spek,
            'category_id' => $request->category_id, // Perbarui nama kolom
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Products $product)
    {
        // Hapus gambar
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }
        $product->delete();
        return redirect()->route('index')->with('success', 'Product deleted successfully');
    }
}
