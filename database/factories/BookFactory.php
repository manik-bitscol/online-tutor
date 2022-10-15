<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
            'book_name'   => fake()->sentence(5),
            'price'       => rand(1, 10),
            'cover_image' => "https://img.freepik.com/free-psd/book-cover-mockup_125540-572.jpg?w=2000",
            'short_desc'  => fake()->paragraph(5),
            'long_desc'   => fake()->paragraph(10),
        ];
    }
}
