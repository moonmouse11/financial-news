<?php

namespace Database\Seeders;

use Database\Seeders\Articles\ComplexitySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ComplexitySeeder::class);
    }
}
