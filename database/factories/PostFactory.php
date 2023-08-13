<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->words(5, true),
            "slug" => fake()->words(5, true),
            "prev_image" => fake()->imageUrl(),
            "content" => fake()->text(100),
            "isPublished" => fake()->boolean(),
            "sort" => rand(0, 1000),
            "category_id" => Category::all()->random(),
        ];
    }
}
