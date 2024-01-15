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
            ->orderByDesc('created_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title']);


        return view('welcome',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $categories = cache()->remember('random_categories', now()->addHours(6), function () {
            return Category::inRandomOrder()->take(6)->select('name')->get();
        });


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
