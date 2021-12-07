<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function perfil()
    {
        $perfil = Perfil::perfil();
        $nome = $perfil->nome;
        $idade = $perfil->idade;

        return view('perfis.perfil', compact('nome', 'idade'));
    }
}
