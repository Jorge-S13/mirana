<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Reviews;
use Illuminate\View\View;

class ReviewsController extends Controller
{
    public function index()
    {
        $posts = Reviews::with('category')
            ->selectRaw('reviews.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'reviews.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);


        return view('pages.reviews.index',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = Reviews::where('slug', $slug)->firstOrFail();

        $categories = Category::inRandomOrder()->take(6)->get();


        $recentPosts = Reviews::with('category')
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();

//        $rPosts = Post::with('category')
//            ->where('id', '!=', $post->id)
//            ->where('is_published', true)
//            ->get();
//
//        $recentPosts = $rPosts->sortByDesc('posted_at')->take(4);
//
//        $relatedPosts = $rPosts->shuffle()->take(4);


        $relatedPosts = Reviews::with('category')
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('pages.reviews.show',[
            'post' => $post,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'relatedPosts' => $relatedPosts
        ]);
    }
}
