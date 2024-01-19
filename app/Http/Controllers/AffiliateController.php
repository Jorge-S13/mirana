<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Category;
use Illuminate\View\View;

class AffiliateController extends Controller
{
    public function index()
    {
        $posts = Affiliate::with('category')
            ->selectRaw('affiliates.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'affiliates.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);


        return view('pages.affiliate.index',['posts' => $posts]);
    }
    protected function show($slug): View
    {
        $post = Affiliate::where('slug', $slug)->firstOrFail();

        $categories = Category::inRandomOrder()->take(6)->get();


        $recentPosts = Affiliate::with('category')
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


        $relatedPosts = Affiliate::with('category')
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('pages.affiliate.show',[
            'post' => $post,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'relatedPosts' => $relatedPosts
        ]);
    }
}
