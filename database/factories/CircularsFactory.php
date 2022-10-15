<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Circulars>
 */
class CircularsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'circular_title'       => fake()->sentence(),
            'application_fee'      => rand(99, 9999),
            'circular_image'       => "https://studyonlinebd.com/assets/uploads/jobs/09-2022/ynVtd5l6FHtVu4rcG0od.jpg",
            'exam_date'            => fake()->date(),
            'exam_time'            => fake()->time(),
            'circular_location' => fake()->word(),
            'circular_description' => fake()->paragraph(8),
        ];
    }
}
