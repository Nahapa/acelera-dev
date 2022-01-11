<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaControllerApi extends Controller
{
    private $model;

    public function __construct(Assinatura $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $assinaturas = Assinatura::paginate(10);

        return response()->json($assinaturas);
    }

    public function store(Request $request)
    {
        Assinatura::create($request->all());

        return response()->json([
            'msg' => 'Assinatura criada com sucesso!!',
            'code' => '200'
        ]);
    }

    public function show($id)
    {
        $assinatura = Assinatura::find($id);

        if (!$assinatura) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        return response()->json($assinatura);
    }

    public function update(Request $request, $id)
    {
        $assinatura = Assinatura::find($id);

        if (!$assinatura) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $assinatura->update($request->all());

        return response()->json([
            'msg' => 'Assinatura alterada com sucesso!!',
            'code' => '200'
        ]);
    }

    public function destroy($id)
    {
        $assinatura = Assinatura::find($id);

        if (!$assinatura) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $assinatura->delete();

        return response()->json([
            'msg' => 'Assinatura deletada com sucesso!!',
            'code' => '200'
        ]);
    }
}
