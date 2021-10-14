<?php

namespace Database\Seeders;

use App\Models\NewsANDTags;
use Illuminate\Database\Seeder;

class NewsANDTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsANDTags::factory()
            ->count(10)
            ->create();
    }
}
