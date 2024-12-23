<?php

namespace Database\Seeders\Articles;

use App\Models\Articles\Complexity;
use Illuminate\Database\Seeder;

class ComplexitySeeder extends Seeder
{
    public function run(): void
    {
        (new Complexity([
            'title' => 'Простой',
        ]))->save();

        (new Complexity([
            'title' => 'Средний',
        ]))->save();

        (new Complexity([
            'title' => 'Продвинутый',
        ]))->save();

        (new Complexity([
            'title' => 'Сложный',
        ]))->save();
    }
}