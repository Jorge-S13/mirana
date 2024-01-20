<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Affiliate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            AffiliateSeeder::class,
            HardwareSeeder::class,
            NewsSeeder::class,
            ReviewsSeeder::class,
            TopPicksSeeder::class,
            TaggabbleSeeder::class,
        ]);
    }
}
