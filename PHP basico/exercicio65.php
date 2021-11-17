<?php

class Gerente
{
    private ?int $id;
    private ?string $nome;
    private ?string $alocacao;
    private ?float $salario;
    private ?int $quantidadeDeSubordinados;

    public function __construct(
        int $id = NULL,
        string $nome = NULL,
        string $alocacao = NULL,
        float $salario = NULL,
        int $quantidadeDeSubordinados = NULL
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->alocacao = $alocacao;
        $this->salario = $salario;
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }

    public function __destruct()
    {
        // echo 'Objeto destruido';
    }

    public function __toString()
    {
        return json_encode([
            'id' => $this->id,
            'nome' => $this->nome,
            'alocacao' => $this->alocacao,
            'salario' => $this->salario,
            'quantidadeDeSubordinados' => $this->quantidadeDeSubordinados
        ]);
    }

    public function obterId(): int
    {
        return $this->id;
    }

    public function obterNome(): string
    {
        return $this->nome;
    }

    public function obterAlocacao(): string
    {
        return $this->alocacao;
    }

    public function obterSalario(): float
    {
        return $this->salario;
    }

    public function obterQuantidadeDeSubordinados(): int
    {
        return $this->quantidadeDeSubordinados;
    }

    public function definirId(int $id): void
    {
        $this->id = $id;
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function definirAlocacao(string $alocacao): void
    {
        $this->alocacao = $alocacao;
    }

    public function definirSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function definirQuantidadeDeSubordinados(int $quantidadeDeSubordinados): void
    {
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }
}

$gerente = new Gerente(1, 'Fabio', 'D3V', 10000, 15);

echo $gerente;
unset($gerente);
