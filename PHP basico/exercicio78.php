<?php

class Biblioteca
{
    private $listaUsuarios;
    private $listaItens;

    public function emprestar(Usuario $usuario, Item $livro)
    {
    }

    public function devolver(Usuario $usuario, Item $livro)
    {
    }

    public function reservar(Usuario $usuario, Item $livro)
    {
    }

    public function renovar(Usuario $usuario, Item $livro)
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

    public function __construct($nome, $login, $senha, $maxEmprestimos, $listaEmprestimos, $listaReservas)
    {
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->maxEmprestimos = $maxEmprestimos;
        $this->listaEmprestimos = $listaEmprestimos;
        $this->listaReservas = $listaReservas;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getMaxEmprestimos()
    {
        return $this->maxEmprestimos;
    }

    public function getListaEmprestimos()
    {
        return $this->listaEmprestimos;
    }

    public function getListaReservas()
    {
        return $this->listaReservas;
    }

    public function setListaEmprestimos($listaEmprestimos)
    {
        $this->listaEmprestimos = $listaEmprestimos;
    }

    public function setListaReservas($listaReservas)
    {
        $this->listaReservas = $listaReservas;
    }

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

    public function __construct(Usuario $usuario, Item $item, $qtdRenovado = 0, $dataExpiracao = 7, $status = true)
    {
        $this->usuario = $usuario;
        $this->item = $item;
        $this->qtdRenovado = $qtdRenovado;
        $this->dataExpiracao = $dataExpiracao;
        $this->status = $status;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function getQTDRenovado()
    {
        return $this->qtdRenovado;
    }

    public function setQTDRenovado($qtdRenovado)
    {
        $this->qtdRenovado = $qtdRenovado;
    }

    public function getDataExpiracao()
    {
        return $this->dataExpiracao;
    }

    public function setDataExpiracao($dataExpiracao)
    {
        $this->dataExpiracao = $dataExpiracao;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status)
    {
        $this->status = $status;
    }
}

class reserva
{
    private $usuario;
    private $livro;
    private $status;

    public function __construct(Usuario $usuario, Item $item, $status = true)
    {
        $this->usuario = $usuario;
        $this->livro = $item;
        $this->status = $status;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getLivro()
    {
        return $this->livro;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
