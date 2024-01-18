<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;

class TagsController extends Controller
{
    public function index($name): View
    {

        $posts = Post::
            whereRelation('tags', 'name', $name)
            ->selectRaw('posts.*, categories.name as category_name')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->orderByDesc('posted_at')
            ->where('is_published', true)
            ->paginate(8);

        return view('welcome',['posts' => $posts]);
    }
}
