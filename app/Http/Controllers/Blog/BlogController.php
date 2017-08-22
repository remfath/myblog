<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all(['slug', 'title', 'description']);
        return view('blog.index', compact('posts'));
    }

    public function content($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.content', compact('post'));
    }

    public function test() {
        return view('blog.test');
    }
}
