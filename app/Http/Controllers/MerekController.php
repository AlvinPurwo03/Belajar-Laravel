<?php

namespace App\Http\Controllers;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
        public function menampilkan() {
        $data = Merek::all();
        return view('mereks.index', compact('data'));
    }

    public function show($id) {
        $data = Merek::findOrFail($id);
        return view('mereks.show', compact('data'));
    }
}
