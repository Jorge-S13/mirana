<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Post;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::factory()->count(100)->create();
    }
}
