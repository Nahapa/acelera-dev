<?php

class DVD extends Produto
{
    public $titulo;
    public $ano;

    public function __construct($codigo, $preco, $titulo, $ano)
    {
        parent::__construct($codigo, $preco);
        $this->titulo = $titulo;
        $this->ano = $ano;
    }
}
