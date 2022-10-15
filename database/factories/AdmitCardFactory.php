<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdmitCard>
 */
class AdmitCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'          => rand(1, 10),
            'institute_name'   => fake()->sentence(5),
            'post_name'        => fake()->sentence(4),
            'admit_card_image' => '/assets/member/img/admit-cards/admit.jpg',
        ];
    }
}
