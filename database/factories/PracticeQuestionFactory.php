<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PracticeQuestion>
 */
class PracticeQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject_id'=>rand(1,5),
            'topic_id'=>rand(1,5),
            'question'=>fake()->sentence(5),
            'answer'=>fake()->sentence(3),
        ];
    }
}
