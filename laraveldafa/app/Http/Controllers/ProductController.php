<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($nilai)
    {
        //
        if ($nilai % 2 == 0) {
            $alertType = 'success';
            $pesan = "Nilai $nilai adalah genap.";
        } else {
            $alertType = 'warning';
            $pesan = "Nilai $nilai adalah ganjil.";
        }

        // Kirim data ke view
        return view('products.product', compact('pesan', 'alertType'));
    }

    public function indexproduk()
    {
        //

        return view('produk', [
            // 'nama' => $data,
            "AlertMessage" => 'sukses',
            'alertType' => 'success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        Product::create($validasi_data);

        return redirect()->back()->with('success', 'produk berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
