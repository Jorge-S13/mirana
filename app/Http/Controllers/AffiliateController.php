<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;

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


        return view('welcome',['posts' => $posts]);
    }
}
