<?php

namespace Database\Seeders;

use App\Models\Affiliate;
use App\Models\Hardware;
use App\Models\News;
use App\Models\Post;
use App\Models\Reviews;
use App\Models\Tag;
use App\Models\TopPicks;
use Illuminate\Database\Seeder;

class TaggabbleSeeder extends Seeder
{
    public function run(): void
    {
        $posts = Post::all();
        $news = News::all();
        $affiliates = Affiliate::all();
        $reviews = Reviews::all();
        $hardwares = Hardware::all();
        $topPicks = TopPicks::all();

        $tags = Tag::all();

        $randomTag = $tags->random(rand(1, 10));

        foreach ($posts as $post) {
            $post->tags()->attach($randomTag,['taggable_type' => 'App\Models\Post']);
        }
        foreach ($news as $new) {
            $new->tags()->attach($randomTag,['taggable_type' => 'App\Models\News']);
        }
        foreach ($affiliates as $affiliate) {
            $affiliate->tags()->attach($randomTag,['taggable_type' => 'App\Models\Affiliate']);
        }
        foreach ($reviews as $review) {
            $review->tags()->attach($randomTag,['taggable_type' => 'App\Models\Reviews']);
        }
        foreach ($hardwares as $hardware) {
            $hardware->tags()->attach($randomTag,['taggable_type' => 'App\Models\Hardware']);
        }
        foreach ($topPicks as $topPick) {
            $topPick->tags()->attach($randomTag,['taggable_type' => 'App\Models\TopPicks']);
        }
    }
}
