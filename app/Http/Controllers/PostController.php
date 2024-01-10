<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->where('is_published', '=', true)->paginate(8);

        return view('welcome',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $categories = Category::inRandomOrder()->take(6)->get();

        $recentPosts = Post::where('id', '!=', $post->id)
            ->where('is_published','=',1)
            ->latest()
            ->take(4)
            ->get();



        $relatedPosts = Post::where('id', '!=', $post->id)
            ->where('is_published','=',1)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('posts.show',[
            'post' => $post,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'relatedPosts' => $relatedPosts
        ]);
    }
}
