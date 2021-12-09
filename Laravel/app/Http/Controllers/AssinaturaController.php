<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;

class AssinaturaController extends Controller
{
    public function listagemass()
    {
        $assinaturas = Assinatura::all();

        return view('assinaturas.listagemass', compact('assinaturas'));
    }

    public function exibeass($id)
    {
        $assinatura = Assinatura::find($id);

        return view('assinaturas.exibeass', compact('assinatura'));
    }
}
