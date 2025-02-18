<?php

namespace Database\Factories;

use App\MovieGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'genre' => fake()->randomElement(MovieGenre::getGenreList()),
            'likes' => fake()->numberBetween(9999, 99999),
            'rating' => fake()->randomFloat(2, 1, 5),
        ];
    }
}
