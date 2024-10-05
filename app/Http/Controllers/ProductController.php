<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan daftar produk (public)
    public function index(Request $request)
    {
        $products = Products::with('category')->get();
        $categories = Categories::all(); // Mengambil semua kategori

        return view('index', compact('products', 'categories'));
    }

    public function about()
{
    return view('products.about');
}


    // Menampilkan detail produk (public)
    public function showProduct($id)
    {
        $product = Products::with('category')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Menampilkan form tambah produk (admin)
    public function create()
    {
        $categories = Categories::all();
        return view('admin.products.create', compact('categories'));
    }

    // Menyimpan produk baru (admin)
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'model'         => 'required|string',
            'wire'          => 'required|string',
            'outside'       => 'required|string',
            'free_height'   => 'required|string',
            'solid_height'  => 'required|string',
            'spring_rate'   => 'required|string',
            'category_id'   => 'required|integer|exists:categories,id'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Products::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $imagePath,
            'model'         => $request->model,
            'wire'          => $request->wire,
            'outside'       => $request->outside,
            'free_height'   => $request->free_height,
            'solid_height'  => $request->solid_height,
            'spring_rate'   => $request->spring_rate,
            'category_id'   => $request->category_id,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Product added successfully');
    }

    // Menampilkan form edit produk (admin)
    public function edit($id)
    {
        $product = Products::findOrFail($id);  // Mengambil produk berdasarkan id
        $categories = Categories::all(); // Mengambil kategori jika perlu
        return view('admin.products.edit', compact('product', 'categories'));  // Mengirimkan data produk ke view
    }
    

    // Memperbarui produk (admin)
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id); // Mengambil produk berdasarkan ID
    
        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'model'         => 'required|string',
            'wire'          => 'required|string',
            'outside'       => 'required|string',
            'free_height'   => 'required|string',
            'solid_height'  => 'required|string',
            'spring_rate'   => 'required|string',
            'category_id'   => 'required|integer|exists:categories,id'
        ]);
    
        // Jika ada gambar yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $imagePath = $product->image;
        }
    
        $product->update([
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $imagePath,
            'model'         => $request->model,
            'wire'          => $request->wire,
            'outside'       => $request->outside,
            'free_height'   => $request->free_height,
            'solid_height'  => $request->solid_height,
            'spring_rate'   => $request->spring_rate,
            'category_id'   => $request->category_id,
        ]);
    
        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully');
    }
    


    // Menghapus produk (admin)
    public function destroy($id)
    {
        $product = Products::find($id);

        if ($product) {
            Storage::disk('public')->delete($product->image);
            $product->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    // Menampilkan detail produk (admin)
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    // Fungsi tambahan lainnya
    public function produk()
    {
        $products = Products::all();
        return view('produk', compact('products'));
    }

    
}
