<?php
    namespace App\Http\Controllers;
use App\Models\categories;
use App\Models\Products;
use App\Models\Reseller; 
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
        $products = Products::with('category')->get();
         $resellers = Reseller::all();
         $categories = Categories::all(); 
         return view('admin.dashboard', compact('products', 'resellers', 'categories'));
     }
    public function dashboard()
     {
         $categories = Categories::all();
         $products = Products::with('category')->get();
         $resellers = Reseller::all();

         return view('admin.dashboard', compact('categories', 'products', 'resellers'));
     }
}
