<?php

namespace Database\Seeders\Articles;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
        public function run(): void
    {
        (new Tag([
            'name' => 'manyWords',
        ]))->save();

        (new Tag([
            'name' => 'maybeInterest',
        ]))->save();

        (new Tag([
            'name' => 'DoYourOwnResearch',
        ]))->save();

        (new Tag([
            'name' => 'SellInMayAndGoAway',
        ]))->save();
    }
}