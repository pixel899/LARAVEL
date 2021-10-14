<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $create_at = $this->faker->dateTimeBetween('-1 year');
        return [
            'preview_text' => $this->faker->text(),
            'detail_text'=> $this->faker->text(),
            'category_id'=> Categories::query()->inRandomOrder()->first()->id,
            'created_at' => $create_at,
            'updated_at' => $this->faker->dateTimeBetween($create_at),
        ];
    }
}
