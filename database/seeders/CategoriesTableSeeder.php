<?php

namespace Database\Seeders;
use App\Models\Categories;
use Illuminate\Database\Seeder;



class CategoriesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++)
        {
            Categories::where('id', $i)->update(['parent_id'=>Categories::query()->inRandomOrder()->first()->id]);
        }


    }
}

