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
        <input name="tamanho" value="{{ old('tamanho') }}" />
        <br>
        <span>Assinatura do responsável</span>
        <input name="assinatura_responsavel" value="{{ old('assinatura_responsavel') }}" />
        <br>
        <span>Quantidade de páginas (1 ou 10)</span>
        <input name="qnt_pages" value="{{ old('qnt_pages') }}" />
        <br>
        <button type="submit">Inserir</button>
    </form>
    <hr>
    <span><a href="{{ route('listagemdoc') }}">Voltar</a></span> <br />
</body>

</html>
