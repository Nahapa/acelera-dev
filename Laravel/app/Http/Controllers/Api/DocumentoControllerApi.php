<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoControllerApi extends Controller
{
    public function listagemdoc()
    {
        $documentos = Documento::paginate();
        return response()->json($documentos);
    }
    public function exibedoc($id)
    {
        $documento = Documento::find($id);
        return response()->json($documento);
    }
}
