<?php

namespace Decorator;

class Mussarela implements Recheio
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome(): string
    {
        return $this->pao->getNome() . ", mussarela";
    }

    public function valor(): float
    {
        return 2 + $this->pao->valor();
    }
}
