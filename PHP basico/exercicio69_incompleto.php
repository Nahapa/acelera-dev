<?php

class ItemOrcamento
{
    private string $historico;
    private float $valor;

    public function __construct(string $historico, float $valor)
    {
        $this->historico = $historico;
        $this->valor = $valor;
    }

    public function getHistorico(): string
    {
        return $this->historico;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}

class ItemOrcamentoComplexo extends ItemOrcamento
{
    private array $subItens;

    public function __construct()
    {
    }

    public function getValor(): float
    {
        return 0;
    }

    public function encontraItem(): ?string
    {
        return '';
    }
}
