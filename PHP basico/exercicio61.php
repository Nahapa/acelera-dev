<?php

class Nota
{
    private int $id;
    private string $nome;
    private string $descricao;
    private float $quantidade;
    private float $preco;
    private float $desconto;

    public function __construct(
        int $id,
        string $nome,
        string $descricao,
        ?float $quantidade,
        float $preco,
        float $desconto
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade ?? 0;
        $this->preco = $preco;
        $this->desconto = $desconto;
    }

    public function definirPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function definirDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function obterId(): int
    {
        return $this->id;
    }

    public function obterNome(): string
    {
        return $this->nome;
    }

    public function obterDescricao(): string
    {
        return $this->descricao;
    }

    public function obterQuantidade(): float
    {
        return $this->quantidade;
    }

    public function obterPreco(): float
    {
        return $this->preco;
    }

    public function obterDesconto(): float
    {
        return $this->desconto;
    }

    public function calcularFatura(): float
    {
        return $this->preco * $this->quantidade;
    }
}
