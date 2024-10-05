<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $categories = Products::all();
        return view('admin.dashboard', compact('products', 'categories'));
    }

    public function admin()
    {
        // Mengambil semua produk dari database
        $products = ProductS::with('category')->get(); // Mengambil produk beserta kategorinya
        return view('admin.dashboard', compact('products')); // Mengirim produk ke view
    }
}