<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'exam_id'  => rand(1, 10),
            'question' => fake()->sentence(),
            'option_a' => 'option_a',
            'option_b' => 'option_b',
            'option_c' => 'option_c',
            'option_d' => 'option_d',
            'answer'   => 'option_a',
        ];
    }
}
