<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
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
            'address_type' => 'present-address',
            'careof'       => fake()->name('male'),
            'district'     => "Sherpur",
            'upzilla'      => "jhenaigati",
            'village'      => "Fulhari",
            'post_office'  => "Rangtia",
            'post_code'    => '2100',
        ];
    }
}
