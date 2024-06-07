<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    
    public function index() {

        $post = Post::all();

        return view('admin.posts.index', [
            'post' => $post
        ]);
    }

    public function create() {


        return view('admin.posts.create');
    }


    public function store(Request $request) {
        
        Post::create([
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        return redirect()->route('post');
    }
}
