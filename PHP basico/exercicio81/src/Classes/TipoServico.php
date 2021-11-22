<?php

namespace exercicio81\Classes;

class TipoServico
{
    private int $id;
    private string $nome;
    private string $descricao;
    private int $nivel;

    public function verificaPrioridade(): bool
    {
        return false; // Alterar
    }

    public function aumentaNivel(): bool
    {
        return false; // Alterar
    }
}
