<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibe Documento</title>
</head>

<body>
    <span>Titulo: {{ $documento->titulo }}</a> </span> <br />
    <span>Tamanho do documento em MB: {{ $documento->tamanho }} </span> <br />
    <span>Assinatura do responsável: {{ $documento->assinatura_responsavel }} </span> <br />
    <span>Quantidade de páginas (1 ou 10): {{ $documento->qnt_pages }} </span> <br />
    <form action="{{ route('removedoc', $documento->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remover</button>
    </form>
    <hr>
    <span><a href="{{ route('listagemdoc') }}">Voltar</a></span> <br />
</body>

</html>
