<?php

namespace Decorator;

class Sal implements pao
{
    protected $nome = 'Pão de Sal';
    protected $recheio;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function valor(): float
    {
        return 1;
    }
}
