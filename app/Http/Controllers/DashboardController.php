<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');

    }

    public function admin(){
        if (Auth::check()) {
            $admin = Auth::admin();
            return view('admin.dashboard', compact('admin'));
        }
        return redirect()->route('auth.login')->withErrors(['notif' => 'Login dulu Pea']);

    }
    // public function cant(){
    //     return view('login')->with('failed', 'lu belum login pukimak');

    // }

}
