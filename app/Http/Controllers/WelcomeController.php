<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Hardware;
use App\Models\News;
use App\Models\Post;
use App\Models\Reviews;
use App\Models\TopPicks;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')
            ->selectRaw('posts.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->take(8)
            ->get(['slug','main_image','title','category_id']);

        $affilates = Affiliate::with('category')
            ->selectRaw('affiliates.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'affiliates.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->take(8)
            ->get(['slug','main_image','title','category_id']);

        $hardwares = Hardware::with('category')
            ->selectRaw('hardwares.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'hardwares.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->take(8)
            ->get(['slug','main_image','title','category_id']);

        $news = News::with('category')
            ->selectRaw('news.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->take(8)
            ->get(['slug','main_image','title','category_id']);

        $reviews = Reviews::with('category')
            ->selectRaw('reviews.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'reviews.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->take(8)
            ->get(['slug','main_image','title','category_id']);

        $topPicks = TopPicks::with('category')
            ->selectRaw('top_picks.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'top_picks.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->take(8)
            ->get(['slug','main_image','title','category_id']);

        return view('welcome', [
            'posts' => $posts,
            'affilates' => $affilates,
            'hardwares' => $hardwares,
            'news' => $news,
            'reviews' => $reviews,
            'topPicks' => $topPicks,
        ]);


    }
}
