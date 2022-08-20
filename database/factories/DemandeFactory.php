<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demande>
 */
class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname' => fake()->firstName(),
            'lname' => fake()->lastName(),
            'fname_ar' => fake()->firstName(),
            'lname_ar' => fake()->lastName(),
            'birthday' => fake()->numberBetween(1960,2006),
            'niveau' => fake()->randomElement(['TC', '1er BAC', '2eme Bac']),
            'date_arrete' => fake()->numberBetween(1992, 2022),
            'status' => fake()->randomElement(['En cours', 'Confirmed']),
            'quantity' => fake()->numberBetween(1,5),
            'attestation' => fake()->boolean(),
            'attestation_ar' => fake()->boolean(),
            'releve' => fake()->boolean(),
            'releve_ar' => fake()->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
