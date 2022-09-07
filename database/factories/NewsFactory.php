<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = News::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'link' => $this->faker->url(),
            'file' => $this->faker->imageUrl(640, 480, 'animals', true),
            'date' => $this->faker->date()
        ];
    }
}
