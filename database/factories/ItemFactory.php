<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word,
            'slug'=>$this->faker->word,
            'detail'=>$this->faker->sentence,
           // 'photo'=>$this->faker->imageUrl('720','640',),
           // 'thumb'=>$this->faker->imageUrl('640','480',),
             'photo'=> '/img/product/1.jpg',
            'thumb'=> '/img/product/2.jpg',
            'color'=>$this->faker->colorName,

            'weight'=>$this->faker->word,
            'price'=>180,
            'item_category_id'=>$this->faker->numberBetween(1,2),
            'user_id'=>$this->faker->numberBetween(1,2),
            'visit'=>$this->faker->numberBetween(1,300),
             ];
    }
}
