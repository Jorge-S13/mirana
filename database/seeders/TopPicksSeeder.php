<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\TopPicks;
use Illuminate\Database\Seeder;

class TopPicksSeeder extends Seeder
{
    public function run(): void
    {
        TopPicks::factory()->count(100)->create();
    }
}
