<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Documento</title>
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span><br />
        @endforeach
        <hr>
    @endif
    <form action="{{ route('inseredoc') }}" method="POST">
        @csrf
        <span>Titulo</span>
        <input name="titulo" value="{{ old('titulo') }}" />
        <br>
        <span>Tamanho do documento em MB</span>
        <input name="tamanho_mb" value="{{ old('tamanho_mb') }}" />
        <br>
        <span>Nº de assinaturas do documento</span>
        <input name="numero_assinaturas" value="{{ old('numero_assinaturas') }}" />
        <br>
        <span>Assinatura do responsável</span>
        <input name="assinatura_responsavel" value="{{ old('assinatura_responsavel') }}" />
        <br>
        <span>Quantidade de páginas (1 ou 10)</span>
        <input name="quantidade_paginas" value="{{ old('quantidade_paginas') }}" />
        <br>
        <button type="submit">Inserir</button>
    </form>
    <hr>
    <span><a href="{{ route('listagemdoc') }}">Voltar</a></span> <br />
</body>

</html>
