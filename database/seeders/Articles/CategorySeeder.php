<?php

namespace Database\Seeders\Articles;

use App\Models\Articles\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        (new Category([
            'title' => 'Bank',
            'slug' => 'bank',
            'description' => 'Информация только о банках. Больших и не очень',
        ]))->save();

        (new Category([
            'title' => '̆Cryptocurrency',
            'slug' => 'crypto',
            'description' => 'Статьи про криптовалюты и прочие непонятные NFT',
        ]))->save();

        (new Category([
            'title' => '̆Stock',
            'slug' => 'stock',
            'description' => 'Что там на рынке, где мой брокер?',
        ]))->save();

        (new Category([
            'title' => '̆Epic Fail',
            'slug' => 'epic-fail',
            'description' => 'Статьи о том как каждый мог, но лучше не надо',
        ]))->save();
    }

}