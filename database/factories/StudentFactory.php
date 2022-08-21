<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullName' => fake()->name(),
            'numInscription' => fake()->numberBetween(10000000,99999999),
            'cityBirth' => fake()->city(),
            'birthday' => fake()->numberBetween(1960,2006),
            'niveau' => fake()->randomElement(['TC', '1er BAC', '2eme Bac']),
            'dateArrete' => fake()->numberBetween(1992, 2022),
            'cne' => fake()->bothify('?######'),
            'phone' => fake()->numerify('+2126########'),
            'anneeScolaire' => fake()->numberBetween(1998,2022),
            'note' => fake()->randomFloat(2,5,20),
            'document_id' => fake()->numberBetween(1,4),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
