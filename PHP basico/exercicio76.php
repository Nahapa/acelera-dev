<?php

class Edicoes
{
    private int $ano;
    private int $qntArtigos;
    private int $numEdition;

    public function getEdicao()
    {
    }

    public function setEdicao(Edicoes $edicao): void
    {
    }
}

class Revistas
{
    private $codigo;
    private $titulo;
    private $tipo;
    private Edicoes $edicoes;

    public function getEdicao(): Edicoes
    {
        return $this->edicoes;
    }

    public function setEdicoes(Edicoes $edicao): void
    {
    }
}
