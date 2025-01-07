<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\Products;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('index', compact('profile') );
    }

    public function indexAdmin()
{
    // Ambil semua produk yang ada di database
    $products = Products::paginate(10);
    // $products = Products::select('name')->get();


    // Menampilkan view untuk admin dengan data produk
    return view('admin.products.index', compact('products'));
}



    public function about()
{
    return view('products.about');
}


public function cvt()
{
    $profile = profile::first();
    $products = products::where('category_id', 1)->paginate(5);
    return view('categories.cvt', compact('products','profile'));
}

public function valve()
{
    $profile = profile::first();
    $products = Products::where('category_id', 2)->paginate(5);
    return view('categories.valve', compact('products','profile'));
}

public function clutch()
{
    $profile = profile::first();
    $products = Products::where('category_id', 3)->paginate(5);
    return view('categories.clutch', compact('products', 'profile'));
}

public function sentri()
{
    $profile = profile::first();
    $products = Products::where('category_id', 4)->paginate(5);
    return view('categories.sentri', compact('products','profile'));

}
public function showProduct($id)
{
    $products = Products::find($id);
    $productDetail = Products::findOrFail($id);
    $profile = profile::first();
    $relatedProducts = Products::where('category_id', $productDetail->category_id)
                            ->where('id', '!=', $id)
                            ->get();

    return view('product.show', compact('productDetail', 'relatedProducts', 'products','profile'));
}

    public function create(Request $request)
    {
        $categories = Categories::all();
        $selectedCategoryId = $request->input('category_id');
        return view('admin.products.create', compact('categories', 'selectedCategoryId'));
    }

    public function createSentri(Request $request)
    {
        $categories = Categories::all();
        $selectedCategoryId = $request->input('category_id');
        return view('admin.products.createSentri', compact('categories', 'selectedCategoryId'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'model'         => 'required|string',
            'wire'          => 'required|string',
            'outside'       => 'required|string',
            'free_height'   => 'required|string',
            'solid_height'  => 'required|string',
            'spring_rate'   => 'required|string',
            'category_id'   => 'required|integer|exists:categories,id',
        ];

        $request->validate($rules);

        $imagePath = $request->file('image')->store('images', 'public');

        Products::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $imagePath,
            'model'         => $request->model,
            'wire'          => $request->wire,
            'outside'       => $request->outside,
            'free_height'   => $request->free_height,
            'solid_height'  => $request->solid_height,
            'spring_rate'   => $request->spring_rate,
            'category_id'   => $request->category_id,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully');
    }

    public function edit($id)
        {
            $product = Products::findOrFail($id);
            $categories = Categories::all();
            return view('admin.products.edit', compact('product', 'categories'));
        }




    public function sentristore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'model' => 'required|string',
            'wire' => 'required|string',
            'outside' => 'required|string',
            'Free_length' => 'required|string',
            'Initial_Tension' => 'required|string',
            'spring_rate' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath ?? null,
            'model' => $request->model,
            'wire' => $request->wire,
            'outside' => $request->outside,
            'Free_length' => $request->Free_length,
            'Initial_Tension' => $request->Initial_Tension,
            'spring_rate' => $request->spring_rate,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'model' => 'required|string',
            'wire' => 'required|string',
            'outside' => 'required|string',
            'spring_rate' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id'
        ]);

        if ($request->category_id == 4) {
            $request->validate([
                'Free_length' => 'required|string',
                'Initial_Tension' => 'required|string',
            ]);
        } else {
            $request->validate([
                'free_height' => 'required|string',
                'solid_height' => 'required|string',
            ]);
        }

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'model' => $request->model,
            'wire' => $request->wire,
            'outside' => $request->outside,
            'spring_rate' => $request->spring_rate,
            'category_id' => $request->category_id,
            'free_height' => $request->category_id == 4 ? null : $request->free_height,
            'solid_height' => $request->category_id == 4 ? null : $request->solid_height,
            'Free_length' => $request->category_id == 4 ? $request->Free_length : null,
            'Initial_Tension' => $request->category_id == 4 ? $request->Initial_Tension : null,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }



    public function destroy($id)
    {
        $product = Products::find($id);

        if ($product) {
            Storage::disk('public')->delete($product->image);
            $product->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    public function show($id)
    {
        $profile = profile::first();
        $products = Products::findOrFail($id);
        $relatedProducts = Products::where('category_id', $products->category_id)
        ->where('id', '!=', $id)
        ->get();
        return view('admin.products.show', compact('products', 'relatedProducts','profile'));
    }


}
