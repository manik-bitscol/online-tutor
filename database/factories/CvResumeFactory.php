<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CvResume>
 */
class CvResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'              => rand(1, 10),
            'name'                 => fake()->name('male'),
            'father_name'          => fake()->name('male'),
            'mother_name'          => fake()->name('female'),
            'date_of_birth'        => fake()->date('D-M-Y'),
            'birth_place'          => fake()->word(),
            'gender'               => "male",
            'nationality'          => "bangladeshi",
            'religion'             => "islam",
            'national_id'          => "25255558578844",
            'birth_registration'   => "2525555857884584",
            'passport_no'          => "25255558578",
            'marital_status'       => "married",
            'spouse_name'          => fake()->name('female'),
            'quota'                => fake()->word(),
            'satlipi_typing_speed' => true,
            'typing_speed'         => true,
            'profile_photo'        => 'assets/member/img/admit-cards/admit.jpg',
            'signature_photo'      => 'assets/member/img/admit-cards/admit.jpg',
            'candidate_for'        => 'Govt Job',
        ];
    }
}
