<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    // Tampilkan semua reseller
    public function index()
    {
        $resellers = Reseller::all();
        return view('reseller.index', compact('resellers'));
    }

    // Tampilkan form untuk menambah reseller baru
    public function create()
    {
        return view('admin.resellers.create'); // Sesuaikan dengan file yang ada
    }

    // Simpan reseller baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'kodepos' => 'nullable|string|max:10',
            'phone' => 'required|string|max:20', // Validasi untuk nomor telepon
        ]);

        Reseller::create($request->all()); // Simpan reseller baru
        return redirect()->route('admin.dashboard')->with('success', 'Reseller berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $reseller = Reseller::findOrFail($id); // Pastikan ini mengembalikan reseller yang ada
        return view('admin.resellers.edit', compact('reseller'));
    }
    
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15', // Sesuaikan dengan kebutuhan Anda
        ]);
    
        // Temukan reseller berdasarkan ID
        $reseller = Reseller::findOrFail($id);
    
        // Update data
        $reseller->name = $request->input('name');
        $reseller->province = $request->input('province');
        $reseller->city = $request->input('city');
        $reseller->phone = $request->input('phone');
    
        // Simpan perubahan
        $reseller->save();
    
        // Redirect atau berikan feedback
        return redirect()->route('admin.dashboard')->with('success', 'Data reseller berhasil diupdate!');
    }
    
    

    // Hapus reseller dari database
    public function destroy($id)
    {
        $reseller = Reseller::findOrFail($id); // Temukan reseller berdasarkan ID
        $reseller->delete(); // Hapus reseller
        return redirect()->route('admin.dashboard')->with('success', 'Reseller berhasil dihapus.');
    }

    // Tampilkan semua reseller ke pengguna (user)
    public function userIndex()
    {
        $resellers = Reseller::all();
        return view('resellers.welcome', compact('resellers')); // Sesuaikan dengan file yang ada
    }

    // Tampilkan detail reseller untuk pengguna
    public function userShow($id)
    {
        $reseller = Reseller::findOrFail($id); // Ambil reseller berdasarkan ID
        return view('reseller.show', compact('reseller')); // Pastikan view ini ada
    }

    // Tampilkan daftar reseller
    public function showResellers()
    {
        return view('reseller.index'); // Pastikan ini merujuk ke view yang benar
    }
    public function show($id)
{
    $reseller = Reseller::findOrFail($id);
    return view('admin.resellers.show', compact('reseller'));
}

}
