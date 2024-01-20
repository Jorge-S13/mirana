<?php

namespace Database\Seeders;

use App\Models\Hardware;
use App\Models\Post;
use Illuminate\Database\Seeder;

class HardwareSeeder extends Seeder
{
    public function run(): void
    {
        Hardware::factory()->count(100)->create();
    }
}
