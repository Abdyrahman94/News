<?php

namespace Database\Factories;

use App\Models\User;
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
        $userId = User::inRandomOrder()->first()->id;
        $categoryId = Category::inRandomOrder()->first()->id;
        $viewCount = fake()->numberBetween(0, 1000);

        return [
            'user_id' => $userId,
            'category_id' => $categoryId,
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(5,true),
            'view_count' => $viewCount,
            'like_count' => fake()->numberBetween(0, $viewCount),
        ];
    }
}
