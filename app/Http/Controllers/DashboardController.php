<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Products;
use App\Models\User;
>>>>>>> 6c663bf (menambahkan crud setengah jadi)
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
<<<<<<< HEAD
    public function admin()
    {
        // dd(Auth::user());

=======
    public function index(){
        $products = Products::all();
        $categories = Products::all();
        return view('admin.dashboard', compact('products', 'categories'));
    }

    public function admin(){
>>>>>>> 6c663bf (menambahkan crud setengah jadi)
        if (Auth::check()) {
            return view('admin.dashboard');
        }
        return redirect()->route('auth.login');
    }
}
