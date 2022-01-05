<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicios</title>
</head>

<body>
    @if (session('error'))
        <p style="color: red;">{{ session('error')}}</p>
    @endif
    <a href="{{ route('perfil') }}">Perfil</a><br />
    <a href="{{ route('listagemdoc') }}">Documentos</a><br />
    <a href="{{ route('listagemass') }}">Assinaturas</a><br />
    <a href="{{ route('login') }}">Login</a><br />
    <a href="{{ route('logout') }}">Logout</a><br />
</body>

</html>
