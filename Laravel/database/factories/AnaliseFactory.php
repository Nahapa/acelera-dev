<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnaliseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_doc'            => random_int(1, 600),
            'id_assinatura'     => random_int(1, 300),
            'status'            => $this->faker->name(),
            'data_analise'      => $this->faker->dateTime(),
            'visualizadores'    => $this->faker->randomDigit()
        ];
    }
}
