<?php
namespace App\Http\Controllers;

use App\Models\Reseller;
use App\Models\profile;
use Illuminate\Http\Request;

class ResellerController extends Controller
{

    public function showContactForm()
    {
        // Ambil data provinsi unik dari tabel resellers
        $provinces = Reseller::select('province')->distinct()->get();
    
        // Kirim data provinsi ke view
        return view('sales.contact', compact('provinces'));
    }
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
        $profile = profile::all();
        // Mengambil reseller yang hanya disetujui untuk user
        $resellers = Reseller::where('status', 'approved')->paginate(10);
        return view('reseller.index', compact('resellers','profile'));
    }

    // Untuk Admin
    public function indexAdmin()
    {
        // Mengambil semua reseller untuk admin
        $resellers = Reseller::where('status', 'approved')->paginate(10);
    $pendingCount = Reseller::where('status', 'pending')->count();

    return view('admin.resellers.index', compact('resellers', 'pendingCount'));
    }

    // Untuk User melihat detail reseller
    public function showUser($id)
    {
        $profile = profile::all();
        $reseller = Reseller::findOrFail($id);

        // Pastikan reseller ini disetujui untuk user
        if ($reseller->status != 'approved') {
            return redirect()->route('resellers.index')->with('error', 'This reseller is not available.');
        }

        return view('reseller.show', compact('reseller','profile'));
    }

    // Untuk Admin melihat detail reseller
    public function showAdmin($id)
    {
        $reseller = Reseller::findOrFail($id);

        // Admin bisa melihat semua reseller
        return view('admin.resellers.show', compact('reseller'));
    }

    // Mengapprove reseller
    public function approve($id)
    {
        $reseller = Reseller::findOrFail($id);
        $reseller->status = 'approved';
        $reseller->save();

        return redirect()->route('admin.resellers.index')->with('success', 'Reseller approved!');
    }

    public function pending()
    {
        $resellers = Reseller::where('status', 'pending')->paginate(10);
    
        return view('admin.resellers.pending', compact('resellers'));
    }
    
    // Menolak reseller
    public function reject($id)
    {
        $reseller = Reseller::findOrFail($id);
        $reseller->status = 'rejected';
        $reseller->save();

        return redirect()->route('admin.resellers.pending')->with('error', 'Reseller rejected!');
    }

    public function editAdmin($id)
    {
        $reseller = Reseller::findOrFail($id);
        return view('admin.resellers.edit', compact('reseller'));
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

