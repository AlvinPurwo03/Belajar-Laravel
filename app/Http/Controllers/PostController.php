<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function menampilkan() {
        $data = Post::all();
        return view('posts.index', compact('data'));
    }

    public function show($id) {
        $data = Post::findOrFail($id);
        return view('posts.show', compact('data'));
    }
}
