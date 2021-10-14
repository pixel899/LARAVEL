<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\NewsANDTags;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsANDTagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsANDTags::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'news_id'=> News::query()->inRandomOrder()->first()->id,
            'tags_id'=> Tags::query()->inRandomOrder()->first()->id,
        ];
    }
}
