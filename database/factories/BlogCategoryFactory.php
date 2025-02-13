<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title'=>$this->faker->word,
        'slug'=>$this->faker->word,
        'photo'=>$this->faker->imageUrl(640,480,'fashion'),
        'detail'=>$this->faker->sentence,
        ];
    }
}
