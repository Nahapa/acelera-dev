<?php

namespace Decorator;

class Salame implements Recheio
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome(): string
    {
        return $this->pao->getNome() . ", salame";
    }

    public function valor(): float
    {
        return 1 + $this->pao->valor();
    }
}
