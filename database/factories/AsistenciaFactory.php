<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres'=> $this->faker->name(),
            'apellidos'=> $this->faker->lastName(),
            'codAlumno'=> $this->faker->randomNumber(6),
            'idCurso'=> $this->faker->numberBetween(1,6),
            'fecha'=> $this->faker->date()
        ];
    }
}
