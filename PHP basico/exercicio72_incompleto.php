<?php

class Correntista
{
    private string $cpfCliente;
    private float $saldo;

    public function correntista(string $cpfCliente, float $saldo)
    {
        $this->cpfCliente = $cpfCliente;
        $this->saldo = $saldo;
    }

    public function getCPFCliente(): string
    {
        return $this->cpfCliente;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
}

interface MovimentoConta
{
    public function getCPFCorrentista(): string;
    public function getValorMovimento(): float;
}

interface OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista;
}

$c = [];
$m = [];
