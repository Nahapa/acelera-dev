<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use App\Models\Assinatura;
use App\Models\Documento;

class RelatorioDeAnaliseControllerApi extends Controller
{
    public function index()
    {
        $documentos = Documento::paginate(15);
        $assinaturas = Assinatura::paginate(10);
        $analises = Analise::paginate(10);

        return response()->json([
            'documentos' => $documentos,
            'assinaturas' => $assinaturas,
            'analises' => $analises
        ]);
    }
}
