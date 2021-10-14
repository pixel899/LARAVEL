<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    protected $seeders = [
        CategoriesSeeder::class => 'categories',
        NewsSeeder::class => 'news',
        TagsSeeder::class => 'tags',
        NewsANDTagsSeeder::class => 'news_and_tags',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->seeders as $seed => $table) {
            if(!\DB::table($table)->first()) {
                $this->call($seed);
            }
        }
    }
}
