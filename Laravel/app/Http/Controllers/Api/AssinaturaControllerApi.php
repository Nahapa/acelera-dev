<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStoreAssinaturaRequest;
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
        $assinaturas = $this->model->paginate(10);

        return response()->json($assinaturas);
    }

    public function store(UpdateStoreAssinaturaRequest $request)
    {
        $this->model->create($request->all());

        return response()->json([
            'msg' => 'Assinatura criada com sucesso!!',
            'code' => '200'
        ]);
    }

    public function show($id)
    {
        $assinatura = $this->model->find($id);

        if (!$assinatura) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        return response()->json($assinatura);
    }

    public function update(UpdateStoreAssinaturaRequest $request, $id)
    {
        $assinatura = $this->model->find($id);

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
        $assinatura = $this->model->find($id);

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
