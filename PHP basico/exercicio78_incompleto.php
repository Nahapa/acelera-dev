<?php

class Biblioteca
{
    private $listaUsuarios;
    private $listaItens;

    public function emprestar($usuario, $livro)
    {
    }

    public function devolver($usuario, $livro)
    {
    }

    public function reservar($usuario, $livro)
    {
    }

    public function renovar($usuario, $livro)
    {
    }

    public function punirAtrasos()
    {
    }

    public function limparReservas()
    {
    }
}

class Item
{
    private $id;
    private $nome;
    private $autores;
    private $ano;
    private $penalidadeAtraso;
    private $tempoReserva;
    private $listaEmprestimo;
    private $listaReservas;

    public function estaEmprestado()
    {
    }

    public function estaReservado()
    {
    }
}

class Usuario
{
    private $nome;
    private $login;
    private $senha;
    private $maxEmprestimos;
    private $listaEmprestimos;
    private $listaReservas;

    public function estaPunido()
    {
    }
}

class Emprestimo
{
    private $usuario;
    private $item;
    private $qtdRenovado;
    private $dataExpiracao;
    private bool $status;
}

class reserva
{
    private $usuario;
    private $livro;
    private $status;
}
