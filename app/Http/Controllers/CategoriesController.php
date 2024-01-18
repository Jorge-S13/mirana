<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use function PHPUnit\Framework\isEmpty;

class CategoriesController extends Controller
{
    public function index($id): View
    {
        $posts = Post::with('category')
            ->selectRaw('posts.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->orderByDesc('posted_at')
            ->where('category_id',$id)
            ->where('is_published', true)
            ->paginate(8);

        if ($posts->count() === 0) {
            $randomPosts = Post::with('category')
                ->selectRaw('posts.*, categories.name as category_name')
                ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                ->inRandomOrder()
                ->paginate(8);

            return view('welcome', ['posts' => $randomPosts]);
        }

        return view('welcome',['posts' => $posts]);
    }
}
