<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject_id' => rand(1, 5),
            'topic_id'   => rand(1, 5),
            'name'       => fake()->word(),
            'exam_type'  => "Chapter Base",
        ];
    }
}
