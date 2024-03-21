<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EquipmentType>
 */
class EquipmentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'code' => fake()->name(),
            'name' => fake()->name(),
            'description' => fake()->paragraph(3),
            'created_by' => fake()->numberBetween(1, 100),
            'status' => fake()->randomElement([0, 1]),
        ];
    }
}
