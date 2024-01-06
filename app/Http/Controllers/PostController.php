<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->where('is_published', '=', true)->paginate(9);

        return view('welcome',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show',[
            'post' => $post
        ]);
    }
}
