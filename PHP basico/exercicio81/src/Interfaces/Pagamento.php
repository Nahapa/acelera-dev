<?php

namespace exercicio81\Interfaces;

interface Pagamento
{
    public function status();
    public function verificaMerioPagamento(): bool;
    public function mostraQuantidadeParcelas(): bool;
    public function aplicaDesconto(): bool;
    public function aplicaJuros(): bool;
    public function aplicaTaxa(): bool;
    public function removeTaxa(): bool;
    // protected function atualizaStatus(): string;
    // protected function criaIdentificador(Aluno $aluno, string $hash): bool;
}
