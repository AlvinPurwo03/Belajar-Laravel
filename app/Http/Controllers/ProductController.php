<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function menampilkan() {
        $data = Produk::all();

        return view('produks.index', compact('data'));
    }
    public function show($id) {
        $data = Produk::findOrFail($id);

        return view('produks.show', compact('data'));
    }
}
