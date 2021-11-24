<?php

class Correntista
{
    private string $cpfCliente;
    private float $saldo;

    public function __construct(string $cpfCliente, float $saldo)
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

class CorrentistaDespesa extends Correntista
{
    private array $despesasPrevistas;

    public function __construct(
        string $cpfCliente,
        float $saldo,
        array $despesasPrevistas
    ) {
        parent::__construct($cpfCliente, $saldo);
        $this->despesasPrevistas = $despesasPrevistas;
    }

    public function getDespesasPrevistas(): array
    {
        return $this->despesasPrevistas;
    }
}

function correntistasNegativados(array $correntistasDespesas)
{
    $correntistasDespesasNegativados = [];

    foreach ($correntistasDespesas as $correntistaDespesa) {
        $totalDespesasPrevistas = 0;

        foreach ($correntistaDespesa->getDespesasPrevistas() as $despesaPrevista) {
            $totalDespesasPrevistas += $despesaPrevista->getValor();
        }

        if ($correntistaDespesa->getSaldo() < $totalDespesasPrevistas) {
            $correntistasDespesasNegativados[] = $correntistaDespesa;
        }
    }

    return $correntistasDespesasNegativados;
}
