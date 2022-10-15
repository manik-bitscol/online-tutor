<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationQualification>
 */
class EducationQualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'      => rand(1, 10),
            'exam_name'    => 'SSC',
            'board_name'   => "Dhaka",
            'roll_no'      => rand(100000, 9999999),
            'reg_no'       => rand(100000, 9999999),
            'result'       => "GPS-5",
            'subject'      => "Math",
            'passing_year' => "2022",
        ];
    }
}
