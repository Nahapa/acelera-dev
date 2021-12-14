<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentos</title>
</head>

<body>
    <a href="{{ route('novodoc') }}">Novo</a>
    <hr />
    @if (Session::has('success'))
        <div>## {{ Session::get('success') }} ##</div>
        <hr>
    @endif
    @foreach ($documentos as $documento)
        <span>Titulo: {{ $documento->titulo }}</span> <br />
        <span>Tamanho do documento em MB: {{ $documento->tamanho_mb }}</span> <br />
        <span>Nº de assinaturas do documento: {{ $documento->numero_assinaturas }}</span> <br />
        <span>Assinatura do responsável: {{ $documento->assinatura_responsavel }}</span> <br />
        <span>Quantidade de páginas (1 ou 10): {{ $documento->quantidade_paginas }}</span> <br />
        <span><a href="{{ route('exibedoc', $documento->id) }}">Exibir</a></span> <br />
        <hr />
    @endforeach
    <span><a href="{{ route('exercicios') }}">Voltar</a></span> <br />
</body>

</html>
