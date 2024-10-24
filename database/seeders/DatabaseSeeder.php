<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::factory(10)->recycle([Category::factory(3)->create(), User::factory(5)->create()])->create();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PostSeeder::class
        ]);
    }
}
