<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'price'=>$this->faker->numberBetween(1000,100000),
            'description'=>$this->faker->text,
            'author_id'=>$this->faker->numberBetween(1,3),
            'category_id'=>$this->faker->numberBetween(1,4),
            'published_year'=>$this->faker->year,
            'publisher_id'=>$this->faker->numberBetween(1,100),
            'edition'=>$this->faker->text,
            'total'=>$this->faker->numberBetween(100,1000),
        ];
    }
}
