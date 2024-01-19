<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Hardware;
use App\Models\News;
use App\Models\Post;
use App\Models\Reviews;
use App\Models\Tag;
use App\Models\TopPicks;
use Illuminate\View\View;

class TagsController extends Controller
{
    public function posts($slug): View
    {

        $posts = Post::
            with('category')
            ->whereRelation('tags', 'slug', $slug)
            ->selectRaw('posts.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);

        return view('pages.posts.index',['posts' => $posts]);
    }
    public function news($slug): View
    {

        $posts = News::
            with('category')
            ->whereRelation('tags', 'slug', $slug)
            ->selectRaw('news.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);

        return view('pages.news.index',['posts' => $posts]);
    }
    public function reviews($slug): View
    {

        $posts = Reviews::
            with('category')
            ->whereRelation('tags', 'slug', $slug)
            ->selectRaw('reviews.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'reviews.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);

        return view('pages.reviews.index',['posts' => $posts]);
    }
    public function hardware($slug): View
    {

        $posts = Hardware::
            with('category')
            ->whereRelation('tags', 'slug', $slug)
            ->selectRaw('hardwares.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'hardwares.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);

        return view('pages.hardware.index',['posts' => $posts]);
    }
    public function topPicks($slug): View
    {

        $posts = TopPicks::
            with('category')
            ->whereRelation('tags', 'slug', $slug)
            ->selectRaw('top_picks.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'top_picks.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);

        return view('pages.toppicks.index',['posts' => $posts]);
    }
    public function affiliateLinks($slug): View
    {

        $posts = Affiliate::
            with('category')
            ->whereRelation('tags', 'slug', $slug)
            ->selectRaw('affiliates.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'affiliates.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);

        return view('pages.affiliate.index',['posts' => $posts]);
    }
}
