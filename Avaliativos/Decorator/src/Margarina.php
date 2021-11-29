<?php

namespace Decorator;

class Margarina implements Recheio
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome(): string
    {
        return $this->pao->getNome() . ", margarina";
    }

    public function valor(): float
    {
        return 1 + $this->pao->valor();
    }
}
