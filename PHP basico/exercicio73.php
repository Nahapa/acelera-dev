<?php

class DespesaMes
{
    private int $mes;
    private float $valor;

    public function __construct(int $mes, float $valor)
    {
        $this->mes = $mes;
        $this->valor = $valor;
    }

    public function getMes(): int
    {
        return $this->mes;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}

class DespesaDia extends DespesaMes
{
    private int $dia;

    public function __construct(int $dia, int $mes, float $valor)
    {
        parent::__construct($mes, $valor);
        $this->dia = $dia;
    }

    public function getDia(): int
    {
        return $this->dia;
    }
}

class Despesas
{
    private string $cpf;
    private array $despesaDias;
    private array $despesaMeses;

    public function __construct(string $cpf, array $despesaDias, array $despesaMeses)
    {
        $this->cpf = $cpf;
        $this->despesaDias = $despesaDias;
        $this->despesaMeses = $despesaMeses;
    }

    public function getCPF(): string
    {
        return $this->cpf;
    }

    public function totalizaMes(int $mes): DespesaMes
    {
        foreach ($this->despesaMeses as $despesaMes) {
            if ($mes === $despesaMes->getMes()) {
                return $despesaMes;
            }
        }
    }
}
