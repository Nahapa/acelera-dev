<?php

class Usuario
{
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $matricula;
}

class Emprestimo
{
    private string $dataDeEmprestimo;
    private string $dataPrevistaDeDevolucao;
    private string $dataDeEntregaReal;
    private int $situacao;
}

class Exemplar
{
    private int $codigo;
    private bool $cativa;
    private bool $emprestada;
}

class Livro
{
    private string $titulo;
    private string $autor;
    private string $ano;
    private int $edicao;
    private string $editora;
    private string $ISBN;
}
