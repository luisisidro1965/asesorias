<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lugar>
 */
class LugarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' =>  fake()->name(),
            'descripción' => fake()->text(),
            'capacidad' => fake()->numberBetween(15, 400),
            'status' => 'Ocupado',
        ];
    }
}
