<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'puesto' => $this->faker->text(),
            'fecha_nacimiento' => $this->faker->date(),
            'domicilio' => $this->faker->text(),
            'skills' => $this->faker->text(),
        ];
    }
}
