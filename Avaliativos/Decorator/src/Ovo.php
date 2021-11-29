<?php

namespace Decorator;

class Ovo implements Recheio
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome(): string
    {
        return $this->pao->getNome() . ", ovo";
    }

    public function valor(): float
    {
        return 3 + $this->pao->valor();
    }
}
