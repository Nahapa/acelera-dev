<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qnt_caracteres'        => $this->faker->randomDigitNotNull(),
            'assinatura_default'    => $this->faker->name(),
            'qnt_de_uso'            => $this->faker->randomDigitNotNull(),
        ];
    }
}
