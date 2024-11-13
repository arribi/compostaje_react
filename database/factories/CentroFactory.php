<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Centro>
 */
class CentroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->regexify('[0-9]{2}'), // Ejemplo: 00, 01, 02, etc.
            'nombre' => $this->faker->company,
            'direccion' => $this->faker->address,
            'coordinador' => $this->faker->name,
        ];
    }
}
