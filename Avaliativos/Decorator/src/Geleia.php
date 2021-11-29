<?php

namespace Decorator;

class Geleia implements Recheio
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome(): string
    {
        return $this->pao->getNome() . ", geleia";
    }

    public function valor(): float
    {
        return 3 + $this->pao->valor();
    }
}
