<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * malumotlar qo'shish
     */
    public function run(): void
    {
        Category::factory(5)->create();

        Post::factory(13)->create();

        User::factory(13)->create();

        User::factory()->create([
            'email'    => 'test@example.com',
            'name'     => 'Admin',
            'role'     => 'administrator',
            'password' => bcrypt('password'),
        ]);
    }
}