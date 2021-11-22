<?php

class Usuario
{
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $matricula;

    public function __construct(
        string $nome,
        string $cpf,
        string $telefone,
        string $matricula
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->$matricula = $matricula;
    }
}

class Livro
{
    private string $titulo;
    private string $autor;
    private string $ano;
    private int $edicao;
    private string $editora;
    private string $ISBN;

    public function __construct(
        string $titulo,
        string $autor,
        string $ano,
        int $edicao,
        string $editora,
        string $ISBN
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->edicao = $edicao;
        $this->editora = $editora;
        $this->ISBN = $ISBN;
    }
}

class Exemplar
{
    private int $codigo;
    private bool $cativa;
    private bool $emprestada;
    private Livro $livro;

    public function __construct(
        int $codigo,
        bool $cativa,
        bool $emprestada,
        Livro $livro
    ) {
        $this->codigo = $codigo;
        $this->cativa = $cativa;
        $this->emprestada = $emprestada;
        $this->livro = $livro;
    }
}

class Emprestimo
{
    private string $dataDeEmprestimo;
    private string $dataPrevistaDeDevolucao;
    private string $dataDeEntregaReal;
    private int $situacao;
    private Usuario $usuario;
    private Exemplar $exemplar;

    public function __construct(
        string $dataDeEmprestimo,
        string $dataPrevistaDeDevolucao,
        string $dataDeEntregaReal,
        int $situacao,
        Usuario $usuario,
        Exemplar $exemplar
    ) {
        $this->dataDeEmprestimo = $dataDeEmprestimo;
        $this->dataPrevistaDeDevolucao = $dataPrevistaDeDevolucao;
        $this->dataDeEntregaReal = $dataDeEntregaReal;
        $this->situacao = $situacao;
        $this->usuario = $usuario;
        $this->exemplar = $exemplar;
    }
}
