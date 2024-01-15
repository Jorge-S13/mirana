<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')
            ->selectRaw('posts.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);


        return view('welcome',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $categories = Category::inRandomOrder()->take(6)->select('id','name')->get();


        $recentPosts = Post::with('category')
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();



        $relatedPosts = Post::with('category')
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
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
