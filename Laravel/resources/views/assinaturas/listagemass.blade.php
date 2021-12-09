<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assinaturas</title>
</head>

<body>
    @foreach ($assinaturas as $assinatura)
        <span>Qnt de caracteres da assinatura: {{ $assinatura->quantidade_caracteres }}</a> </span> <br />
        <span>Assinatura padrão: {{ $assinatura->padrao }} </span> <br />
        <span>Nº vezes que essa assinatura foi usada: {{ $assinatura->numero_vezes_usada }} </span> <br />
        <span><a href="{{ route('exibeass', $assinatura->id) }}">Exibir</a></span> <br />
        <hr />
    @endforeach
    <span><a href="{{ route('exercicios') }}">Voltar</a></span> <br />
</body>

</html>