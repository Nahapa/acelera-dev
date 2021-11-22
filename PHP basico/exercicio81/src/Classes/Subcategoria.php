<?php

namespace exercicio81\Classes;

class Subcategoria
{
    private int $id;
    private Categoria $categoria;
    private string $descricao;

    public function verificaPrioridade(): bool
    {
        return false; // Alterar
    }

    public function aumentaNivel(): bool
    {
        return false; // Alterar
    }
}
