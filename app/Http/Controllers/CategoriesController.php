<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('index', compact('categories', 'products'));
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categories::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    // Menampilkan produk berdasarkan kategori
    public function show($id)
    {
        $category = Categories::findOrFail($id);
        $products = Products::where('category_id', $category->id)->get();
        $categories = Categories::all();
        return view('index', compact('category', 'products', 'categories'));
    }

    // Memperbarui kategori
    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui');
    }

    // Menghapus kategori
    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus');
    }
}
