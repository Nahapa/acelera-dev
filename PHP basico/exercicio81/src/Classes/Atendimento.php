<?php

namespace exercicio81\Classes;

class Atendimento
{
    private string $protocolo;
    private Grupo $grupo;
    private Atendente $atendente;
    private Tecnico $tecnico;
    private Aluno $aluno;
    private TipoServico $tipoServico;
    private int $idCategoria;
    private int $idSubcategoria;
    private int $idItem;

    public function alteraStatusAtendimento()
    {
    }

    public function finalizaAtendimento()
    {
    }

    public function repassaAtendimento()
    {
    }
}
