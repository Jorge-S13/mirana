<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TopPicks;
use Illuminate\View\View;

class TopPicksController extends Controller
{
    public function index()
    {
        $posts = TopPicks::with('category')
            ->selectRaw('top_picks.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'top_picks.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);


        return view('pages.toppicks.index',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = TopPicks::where('slug', $slug)->firstOrFail();

        $categories = Category::inRandomOrder()->take(6)->get();


        $recentPosts = TopPicks::with('category')
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


        $relatedPosts = TopPicks::with('category')
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('pages.toppicks.show',[
            'post' => $post,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'relatedPosts' => $relatedPosts
        ]);
    }
}
