<?php

namespace App\Http\Controllers;

use App\Models\Reviews;

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


        return view('welcome',['posts' => $posts]);
    }
}
