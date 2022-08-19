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
            'birthday' => fake()->randomElement(['01/12/2000', '12/2000', '2000']),
            'status' => fake()->randomElement(['En cours', 'Confirmed']),
            'quantity' => fake()->numberBetween(1,5),
            'type' => fake()->randomElement(['Attestation', 'Releve', 'Attestation and Releve']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
