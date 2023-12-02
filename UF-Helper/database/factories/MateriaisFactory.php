<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Materiais;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MateriaisFactory extends Factory
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
            'descricao' => $this->faker->sentence(),
            'tipo' => $this->faker->numberBetween(0, 1),
            'link' => $this->faker->url(),
            'autor_id' => $this->faker->numberBetween(1, 10),
            'disciplina_id' => $this->faker->numberBetween(1, 12),
        ];
    }
}
