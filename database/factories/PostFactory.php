<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

use function mt_rand;

class PostFactory extends Factory
{
    /**
     * qoshish
     */
    public function definition(): array
    {
        return [
            'title'         => $title = fake()->text(100),
            'slug'          => Str::slug($title),
            'preview_image' => 'https://loremflickr.com/640/480?random=' . mt_rand(1, 9999),
            'main_image'    => 'https://loremflickr.com/640/480?random=' . mt_rand(1, 9999),
            'content'       => fake()->realText(5000),
            'category_id'   => Category::inRandomOrder()->first()->id, 
        ];
    }
}
