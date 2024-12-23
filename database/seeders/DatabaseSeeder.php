<?php

namespace Database\Seeders;

use Database\Seeders\Articles\ArticleSeeder;
use Database\Seeders\Articles\CategorySeeder;
use Database\Seeders\Articles\ComplexitySeeder;
use Database\Seeders\Articles\TagSeeder;
use Database\Seeders\Users\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* Article seeders */
        $this->call(ComplexitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}
