<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::all(['id', 'title', 'description']);
        return view('index.index', compact('posts'));
    }

    public function content($id)
    {
        $post = Post::find($id);
        return view('index.content', compact('post'));
    }
}
