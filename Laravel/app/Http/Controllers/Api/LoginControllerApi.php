<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginControllerApi extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->only(['email', 'password']);

        $token = auth('api')->attempt($credenciais);
        if (!$token) {
            return response()->json(["Você não é um usuário válido"], 401);
        }

        return response()->json([
            "token" => $token
        ], 201);
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['Mensagem' => "Saiu com sucesso! Token invalidado!"], 200);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();

        return response()->json([
            "token" => $token,
            "aviso" => "Token atualizado para segurança"
        ], 201);
    }
}
