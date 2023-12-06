<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DisciplinasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->sentence(),
            'codigo' => $this->faker->unique()->numberBetween(1, 10000), //XXX.XXX - 3 letras e 3 numeros
            'ementa' => $this->faker->sentence(),
            'bibliografia' => $this->faker->sentence(),
            'carga_horaria' => $this->faker->numberBetween(1, 10),
            'creditos' => $this->faker->numberBetween(1, 10),
            'pre_requisitos' => $this->faker->sentence(),
            // 'professores' => $this->faker->numberBetween(1, 10),
            // 'monitor' => $this->faker->numberBetween(1, 10),
            'depto_id' => $this->faker->numberBetween(1, 6),
        ];

    }
}
