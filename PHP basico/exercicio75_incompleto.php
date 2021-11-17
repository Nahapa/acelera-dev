<?php

class Aluno
{
    private string $matricula;
    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private string $rg;
    private int $idade;
    private int $nivelEscolar;

    public function realizaMatricula()
    {
    }

    public function realizaRequerimento()
    {
    }

    public function solicitaCertificado()
    {
    }
}

class Turma
{
    protected int $ano;
    protected string $nomeTurma;
    protected array $alunos;
    protected int $capacidade;

    public function listarAlunos()
    {
    }

    public function exibeVagas()
    {
    }

    public function adicionaAluno(Aluno $aluno)
    {
    }
}
