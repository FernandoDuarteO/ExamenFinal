<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create(
            [
                'name' => 'prueba',
                'email' => 'prueba@gmail.com',
                'password' => bcrypt('prueba@gmail.com')
            ],
        );

        User::factory()->create(
            [
                'name' => 'Limber Rodriguez',
                'email' => 'limber@gmail.com',
                'password' => bcrypt('limber@gmail.com')
            ],
        );

        User::factory()->create(
            [
                'name' => 'Test User',
                'email' => 'test@gmail.com',
                'password' => bcrypt('test@gmail.com')
            ],
        );

        // Category::factory(7)->create();
        // Post::factory(20)->create();
        // Animal::factory(5)->create();
    }
}
