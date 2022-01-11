<?php

namespace Database\Seeders;

use App\Models\Assinatura;
use Illuminate\Database\Seeder;

class AssinaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assinatura::factory(300)->create();
    }
}
