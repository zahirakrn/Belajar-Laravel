<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function menampilkan(){
        $post = Post::all();

        return view('posts2\index',compact('post'));
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts2\show',compact('post'));
    }
}
