<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assinaturas</title>
</head>

<body>
    <a href="{{ route('novoass') }}">Novo</a>
    <a href="{{ route('exercicios') }}">Voltar</a>
    <hr />
    @if (Session::has('success'))
        <div>## {{ Session::get('success') }} ##</div>
        <hr>
    @endif
    @foreach ($assinaturas as $assinatura)
        <span>Qnt de caracteres da assinatura: {{ $assinatura->qnt_caracteres }}</a> </span> <br />
        <span>Assinatura padrão: {{ $assinatura->assinatura_default }} </span> <br />
        <span>Nº vezes que essa assinatura foi usada: {{ $assinatura->qnt_de_uso }} </span> <br />
        <span><a href="{{ route('exibeass', $assinatura->id) }}">Exibir</a></span> <br />
        <hr />
    @endforeach
</body>

</html>
