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
