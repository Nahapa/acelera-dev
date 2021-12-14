<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Assinatura</title>
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span><br />
        @endforeach
        <hr>
    @endif
    <form action="{{ route('insereass') }}" method="POST">
        @csrf
        <span>Qnt de caracteres da assinatura</span>
        <input name="quantidade_caracteres" value="{{ old('quantidade_caracteres') }}" />
        <br>
        <span>Assinatura padrão</span>
        <input name="padrao" value="{{ old('padrao') }}" />
        <br>
        <span>Nº vezes que essa assinatura</span>
        <input name="numero_vezes_usada" value="{{ old('numero_vezes_usada') }}" />
        <br>
        <button type="submit">Inserir</button>
    </form>
    <hr>
    <span><a href="{{ route('listagemass') }}">Voltar</a></span> <br />
</body>

</html>
