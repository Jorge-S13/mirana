<?php

namespace Database\Seeders;

use App\Models\Affiliate;
use App\Models\Post;
use Illuminate\Database\Seeder;

class AffiliateSeeder extends Seeder
{
    public function run(): void
    {
        Affiliate::factory()->count(100)->create();
    }
}
