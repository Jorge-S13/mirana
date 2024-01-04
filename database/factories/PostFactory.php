<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $categoruIds = Category::pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence(10),
            'content' => $this->faker->paragraph(20),
            'description' => $this->faker->paragraph(3),
            'main_image' => $this->faker->imageUrl(640,480,'animals',true),
            'views_count' => $this->faker->randomNumber(3,true),
            'likes_count' => $this->faker->randomNumber(3,true),
            'posted_at' => Carbon::now(),
            'category_id' => $this->faker->randomElement($categoruIds),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
