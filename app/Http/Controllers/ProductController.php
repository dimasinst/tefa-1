<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
{
    $product = Product::findOrFail($id); // Mengambil data produk berdasarkan ID

    return view('product.show', compact('product')); // Mengirim variabel $product ke view
}
}
