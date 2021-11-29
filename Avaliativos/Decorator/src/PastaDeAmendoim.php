<?php

namespace Decorator;

class PastaDeAmendoim implements Recheio
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome(): string
    {
        return $this->pao->getNome() . ", pasta de amendoim";
    }

    public function valor(): float
    {
        return 3 + $this->pao->valor();
    }
}
