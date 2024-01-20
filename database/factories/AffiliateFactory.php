<?php

namespace Database\Factories;

use App\Models\Affiliate;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AffiliateFactory extends Factory
{
    protected $model = Affiliate::class;

    public function definition(): array
    {
        $categoruIds = Category::pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence(10),
            'content' => $this->faker->paragraph(20),
            'main_image' => $this->faker->imageUrl(640,480,'animals',true),
            'image_alt' => $this->faker->sentence(5),
            'posted_at' => Carbon::now(),
            'category_id' => $this->faker->randomElement($categoruIds),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
