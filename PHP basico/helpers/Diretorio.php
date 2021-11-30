<?php

class Diretorio
{
    private string $diretorio;
    private string $exercicio;
    private string $caminho;

    public function __construct(string $diretorio, string $exercicio = '.')
    {
        $caminho = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $exercicio . DIRECTORY_SEPARATOR . $diretorio;

        $this->caminho = $caminho;

        if (!is_dir($caminho)) {
            mkdir($caminho);
        }
    }

    public function getCaminho()
    {
        return $this->caminho;
    }
}
