<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;


class TagsTableSeeder extends Seeder
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
            DB::table('tags')->insert([
                'name' => $faker->name(),
            ]);
        }

    }
}
