<?php

class Leite extends Produto implements Perecivel
{
    public $marca;
    public $volume;
    public $dataValidade;

    public function __construct(
        $codigo,
        $preco,
        $marca,
        $volume,
        $dataValidade
    ) {
        parent::__construct($codigo, $preco);
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
    }

    public function estaVencido(): bool
    {
        if (strtotime($this->dataValidade) >= strtotime(date('Y-m-d'))) {
            return false;
        }

        return true;
    }
}
