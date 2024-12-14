<?php

namespace App\Http\Controllers;
use App\Models\profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
{
    $profiles = profile::all(); // Ambil semua data profil
    return view('admin.profile.index', compact('profiles'));
}

public function Footer()
{
    $profile = profile::first(); // Mengambil data profil pertama
    return view('components.footer', compact('profile'));
}
// public function inquiry()
// {
//     $profile = profile::first(); // Mengambil data profil pertama
//     return view('sales.contact', compact('profles'));
// }

    public function edit()
    {
        // Ambil data profile (asumsi hanya satu row di tabel profile)
        $profile = profile::firstOrFail();

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        // Validasi data
        $request->validate([
            'email' => 'required|email',
            'instagram' => 'required|url',
        ]);

        // Update data profile
        $profile = profile::firstOrFail();
        $profile->update($request->only('email', 'instagram'));

        return redirect()->route('admin.profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }

}
