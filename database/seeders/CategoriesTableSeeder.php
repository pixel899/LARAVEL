<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;




class CategoriesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<10;$i++) {
            DB::table('categories')->insert([
                'name' => $faker->name(),
                'parent_id'=>rand(1,10),
            ]);
        }
    }
}
