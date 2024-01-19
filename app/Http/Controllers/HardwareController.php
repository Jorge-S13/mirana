<?php

namespace App\Http\Controllers;

use App\Models\Hardware;

class HardwareController extends Controller
{
    public function index()
    {
        $posts = Hardware::with('category')
            ->selectRaw('hardwares.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'hardwares.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8,['slug','main_image','title','category_id']);


        return view('welcome',['posts' => $posts]);
    }
}
