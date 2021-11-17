<?php

class Plano
{
    private int $pontoX;
    private int $pontoY;

    public function __construct(int $pontoX, int $pontoY)
    {
        $this->pontoX = $pontoX;
        $this->pontoY = $pontoY;
    }

    public function moverPontoDaOrigemParaDestino(int $pontoX, int $pontoY): void
    {
        $this->pontoX += $pontoX;
        $this->pontoY += $pontoY;
    }

    public function validaPonto(int $pontoX, int $pontoY): bool
    {
        if ($this->pontoX != $pontoX || $this->pontoY != $pontoY) {
            return false;
        }

        return true;
    }

    public function obterPontoX(): int
    {
        return $this->pontoX;
    }

    public function obterPontoY(): int
    {
        return $this->pontoY;
    }
}
