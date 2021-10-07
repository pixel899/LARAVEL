<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder
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
            DB::table('news')->insert([
                'preview_text' => $faker->text(),
                'detail_text'=> $faker->text(),
                'category_id'=> rand(1,10),
            ]);
        }
    }
}
