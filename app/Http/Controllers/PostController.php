<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->where('is_published', '=', true)->paginate(9);

        return view('welcome',['posts' => $posts]);
    }
}
