<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\profile;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function adminIndex()
    {
        // Retrieve all testimonials
        $testimoni = Testimonial::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the user view with all testimonials.
     */
    public function userIndex()
    {
        // Retrieve all testimonials
        $profile = profile::all();
        $testimoni = Testimonial::all();
        return view('other.index', compact('testimoni','profile'));
    }

    // Menampilkan form tambah testimoni
    public function create()
    {
        return view('admin.testimoni.create');
    }

    // Menyimpan testimoni baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload file
        $imagePath = $request->file('image')->store('testimonials', 'public');

        // Simpan ke database
        Testimonial::create([
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    // Menampilkan form edit testimoni
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimoni.edit', compact('testimonial'));
    }

    // Mengupdate testimoni di database
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('testimonials', 'public');
            $testimonial->update(['image' => $path]);
        }

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    // Menghapus testimoni
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}
