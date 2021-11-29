<?php

namespace Decorator;

class Doce implements Pao
{
    protected $nome;

    public function __construct()
    {
        $this->nome = 'Pão de Doce';
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function valor(): float
    {
        return 2;
    }
}
