<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function login()
    {
        $usuario = ["id" => rand(4568, 155645), "name" => "Fabio"];
        session(["usuario" => $usuario]);
        return view('autenticacao.login');
    }

    public function logout()
    {
        session()->forget('usuario');
        return view('autenticacao.logout');
    }
}
