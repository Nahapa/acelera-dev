<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStoreDocumentoRequest;
use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoControllerApi extends Controller
{
    private $model;

    public function __construct(Documento $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $documento = $this->model->paginate(10);

        return response()->json($documento);
    }

    public function store(UpdateStoreDocumentoRequest $request)
    {
        $this->model->create($request->all());

        return response()->json([
            'msg' => 'Documento criado com sucesso',
            'code' => '200'
        ]);
    }

    public function show($id)
    {
        $documento = $this->model->find($id);

        if (!$documento) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        return response()->json($documento);
    }

    public function update(UpdateStoreDocumentoRequest $request, $id)
    {
        $documento = $this->model->find($id);

        if (!$documento) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $documento->update($request->all());

        return response()->json([
            'msg' => 'Documento alterado com sucesso!!',
            'code' => '200'
        ]);
    }

    public function destroy($id)
    {
        $documento = $this->model->find($id);

        if (!$documento) {
            return response()->json([
                'msg' => 'ID não encontrado',
                'code' => '404'
            ], 404);
        }

        $documento->delete();

        return response()->json([
            'msg' => 'Documento deletado com sucesso!!',
            'code' => '200'
        ]);
    }
}
