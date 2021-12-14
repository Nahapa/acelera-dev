<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreAssinaturaRequest;
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

    public function novoass()
    {
        return view('assinaturas.novoass');
    }

    public function insereass(UpdateStoreAssinaturaRequest $request)
    {
        Assinatura::create($request->all());

        return redirect()->route('listagemass')->with('success', 'Assinatura criada com sucesso');
    }


    public function removedoc($id)
    {
        Assinatura::find($id)->delete();

        return redirect()->route('listagemass')->with('success', 'Assinatura removido com sucesso');
    }
}
