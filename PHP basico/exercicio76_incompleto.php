<?php

class Revistas
{
    private $codigo;
    private $titulo;
    private $tipo;
    private array $edicoes;

    public function getEdicao(): array
    {
        return [];
    }

    public function setEdicoes(): void
    {
    }
}

class Edicoes
{
    private int $ano;
    private int $qntArtigos;
    private int $numEdition;

    public function getEdicao()
    {
    }

    public function setEdicao()
    {
    }
}
