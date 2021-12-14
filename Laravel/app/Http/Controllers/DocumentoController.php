<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreDocumentoRequest;
use App\Models\Documento;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    public function listagemdoc()
    {
        $documentos = Documento::all();
        Log::channel('documentos')->info('Documentos consultados com sucesso');

        return view('documentos.listagemdoc', compact('documentos'));
    }

    public function exibedoc($id)
    {
        $documento = Documento::find($id);
        Log::channel('documentos')->info('Documento exibido com sucesso');

        return view('documentos.exibedoc', compact('documento'));
    }

    public function novodoc()
    {
        return view('documentos.novodoc');
    }

    public function inseredoc(UpdateStoreDocumentoRequest $request)
    {
        Documento::create($request->all());
        Log::channel('documentos')->info('Documento criado com sucesso');


        return redirect()->route('listagemdoc')->with('success', 'Documento criado com sucesso');
    }

    public function removedoc($id)
    {
        Documento::find($id)->delete();
        Log::channel('documentos')->info('Documento removido com sucesso');

        return redirect()->route('listagemdoc')->with('success', 'Documento removido com sucesso');
    }
}
