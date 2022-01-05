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
            'tamanho_mb'                => $this->faker->randomNumber(),
            'numero_assinaturas'        => $this->faker->randomNumber(),
            'assinatura_responsavel'    => $this->faker->name(),
            'quantidade_paginas'        => $this->faker->randomNumber()
        ];
    }
}
