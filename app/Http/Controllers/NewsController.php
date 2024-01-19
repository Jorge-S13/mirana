<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $posts = News::with('category')
            ->selectRaw('news.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'news.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);


        return view('welcome',['posts' => $posts]);
    }
}
