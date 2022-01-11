<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'                    => $this->faker->name(),
            'tamanho'                   => $this->faker->randomNumber(),
            'assinatura_responsavel'    => $this->faker->name(),
            'qnt_pages'                 => $this->faker->randomNumber()
        ];
    }
}
