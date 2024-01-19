<?php

namespace App\Http\Controllers;

use App\Models\TopPicks;

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


        return view('welcome',['posts' => $posts]);
    }
}
