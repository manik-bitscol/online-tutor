<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SavePassword>
 */
class SavePasswordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'        => rand(1, 10),
            'institute_name' => fake()->word(5),
            'post_name'      => fake()->word(5),
            'user'           => fake()->word(),
            'password'       => fake()->word(5),
        ];
    }
}
