<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class NewsANDTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<10;$i++) {
            DB::table('news_and_tags')->insert([
                'news_id'=> rand(1,10),
                'tags_id'=> rand(1,10),
            ]);
        }
    }
}
