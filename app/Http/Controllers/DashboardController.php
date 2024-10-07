<?php
    namespace App\Http\Controllers;
use App\Models\categories;
use App\Models\Products;
use App\Models\Reseller; // Impor model Reseller
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
        $products = Products::with('category')->get(); // Mengambil produk beserta kategorinya
        $resellers = Reseller::all(); // Mengambil semua reseller
        return view('admin.dashboard', compact('products', 'resellers')); // Mengirim produk dan reseller ke view
    }
}
