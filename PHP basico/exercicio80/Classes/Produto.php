<?php

abstract class Produto
{
    public $codigo;
    public $preco;

    public function __construct($codigo, $preco)
    {
        $this->codigo = $codigo;
        $this->preco = $preco;
    }
}
