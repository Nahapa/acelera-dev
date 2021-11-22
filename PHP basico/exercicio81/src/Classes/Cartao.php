<?php

namespace exercicio81\Classes;

use exercicio81\Interfaces\Pagamento;

class Cartao implements Pagamento
{
    private int $id;
    private string $tipo;
    private Conta $conta;

    public function status()
    {
    }
    public function verificaMerioPagamento(): bool
    {
        return true; /* Alterar*/
    }
    public function mostraQuantidadeParcelas(): bool
    {
        return true; /* Alterar*/
    }
    public function aplicaDesconto(): bool
    {
        return true; /* Alterar*/
    }
    public function aplicaJuros(): bool
    {
        return true; /* Alterar*/
    }
    public function aplicaTaxa(): bool
    {
        return true; /* Alterar*/
    }
    public function removeTaxa(): bool
    {
        return true; /* Alterar*/
    }
    // protected function atualizaStatus(): string;
    // protected function criaIdentificador(Aluno $aluno, string $hash): bool;
}
