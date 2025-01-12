<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * category qo'shish
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => $title = fake()->text(5),
            'slug'          => Str::slug($title),
        ];
    }
}

