<?php

namespace Database\Seeders;

use App\Models\Analise;
use Illuminate\Database\Seeder;

class AnaliseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Analise::factory(100)->create();
    }
}
