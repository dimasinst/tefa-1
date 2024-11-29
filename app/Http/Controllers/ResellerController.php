<?php
namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    // Menyimpan data reseller
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        Reseller::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'province' => $request->province,
            'city' => $request->city,
            'instagram' => $request->instagram,
            'alamat' => $request->alamat,
            'status' => 'pending',  // Status awal adalah 'pending'
        ]);

        return redirect()->back()->with('success', 'Data berhasil dikirim!');
    }

    // Menampilkan daftar reseller di admin
    public function indexUser()
    {
        // Mengambil reseller yang hanya disetujui untuk user
        $resellers = Reseller::where('status', 'approved')->get();
        return view('reseller.index', compact('resellers'));
    }

    // Untuk Admin
    public function indexAdmin()
    {
        // Mengambil semua reseller untuk admin
        $resellers = Reseller::all();
        return view('admin.resellers.index', compact('resellers'));
    }

    // Untuk User melihat detail reseller
    public function showUser($id)
    {
        $reseller = Reseller::findOrFail($id);

        // Pastikan reseller ini disetujui untuk user
        if ($reseller->status != 'approved') {
            return redirect()->route('resellers.index')->with('error', 'This reseller is not available.');
        }

        return view('reseller.show', compact('reseller'));
    }

    // Untuk Admin melihat detail reseller
    public function showAdmin($id)
    {
        $reseller = Reseller::findOrFail($id);

        // Admin bisa melihat semua reseller
        return view('resellers.show', compact('reseller'));
    }

    // Mengapprove reseller
    public function approve($id)
    {
        $reseller = Reseller::findOrFail($id);
        $reseller->status = 'approved';
        $reseller->save();

        return redirect()->route('admin.resellers.index')->with('success', 'Reseller approved!');
    }

    // Menolak reseller
    public function reject($id)
    {
        $reseller = Reseller::findOrFail($id);
        $reseller->status = 'rejected';
        $reseller->save();

        return redirect()->route('admin.resellers.index')->with('error', 'Reseller rejected!');
    }
    
    public function editAdmin($id)
    {
        $reseller = Reseller::findOrFail($id);
        return view('resellers.edit', compact('reseller'));
    }

    // Method untuk Update reseller oleh admin
    public function updateAdmin(Request $request, $id)
    {
        $reseller = Reseller::findOrFail($id);

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        // Update data reseller
        $reseller->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('admin.resellers.index')->with('success', 'Reseller updated successfully.');
    }
    public function destroyAdmin($id)
    {
        $reseller = Reseller::findOrFail($id);
        
        // Hapus reseller
        $reseller->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.resellers.index')->with('success', 'Reseller deleted successfully.');
    }
}

