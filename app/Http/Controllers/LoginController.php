<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login_proses(request $request)
    {
        $request->validate([
            'USN' => 'required',
            'password' => 'required'
        ]);
        $data = [
            'nickname' => $request->USN,
            'password' => $request->password
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Username atau Password salah');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->with('failed','Anda telah keluar dari sistem');
    }
}
