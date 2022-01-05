<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Documento::create([
        //     'titulo'                    => 'Documento RG',
        //     'tamanho_mb'                => 2,
        //     'numero_assinaturas'        => 1,
        //     'assinatura_responsavel'    => 'Fabio Silva',
        //     'quantidade_paginas'        => 1
        // ]);

        // Documento::create([
        //     'titulo'                    => 'Documento CPF',
        //     'tamanho_mb'                => 1,
        //     'numero_assinaturas'        => 1,
        //     'assinatura_responsavel'    => 'Fabio Silva',
        //     'quantidade_paginas'        => 1
        // ]);

        // Documento::create([
        //     'titulo'                    => 'Documento CNH',
        //     'tamanho_mb'                => 3,
        //     'numero_assinaturas'        => 2,
        //     'assinatura_responsavel'    => 'Fabio Alvarenga Silva',
        //     'quantidade_paginas'        => 2
        // ]);

        Documento::factory(600)->create();
    }
}
