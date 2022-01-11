<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibe Assinatura</title>
</head>

<body>
    <span>Qnt de caracteres da assinatura: {{ $assinatura->qnt_caracteres }}</a> </span> <br />
    <span>Assinatura padrão: {{ $assinatura->assinatura_default }} </span> <br />
    <span>Nº vezes que essa assinatura foi usada: {{ $assinatura->qnt_de_uso }} </span> <br />
    <form action="{{ route('removeass', $assinatura->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remover</button>
    </form>
    <hr>
    <span><a href="{{ route('listagemass') }}">Voltar</a></span> <br />
</body>

</html>
