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

    public function __construct(
        string $matricula,
        string $nome,
        string $sobrenome,
        string $cpf,
        string $rg,
        int $idade,
        int $nivelEscolar
    ) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->idade = $idade;
        $this->nivelEscolar = $nivelEscolar;
    }

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
    protected Aluno $alunos;
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
