<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function menampilkan() {
        $product = Product::all();

        return view('produks.index', compact('product'));
    }
    // public function show($id) {
    //     $data = Produk::findOrFail($id);

    //     return view('produks.show', compact('data'));
    // }
}
