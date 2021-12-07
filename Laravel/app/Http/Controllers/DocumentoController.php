<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function documentos()
    {
        $documentos = Documento::all();

        return view('documentos.documento', compact('documentos'));
    }
}
