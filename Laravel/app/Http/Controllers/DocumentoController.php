<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    public function listagem()
    {
        $documentos = Documento::all();
        Log::channel('documentos')->info('Documentos consultados com sucesso');

        return view('documentos.listagemdoc', compact('documentos'));
    }

    public function exibedoc($id)
    {
        $documento = Documento::find($id);
        Log::channel('documentos')->info('Exibe Documento consultado com sucesso');

        return view('documentos.exibedoc', compact('documento'));
    }
}
