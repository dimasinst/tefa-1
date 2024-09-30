<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        // dd(Auth::user());

        if (Auth::check()) {
            return view('admin.dashboard');
        }
        return redirect()->route('auth.login');
    }
}
