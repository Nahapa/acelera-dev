<?php

require_once('./exercicio71.php');

class Transferencia implements MovimentoConta
{
    private $cpf;
    private $valor;

    public function __construct(string $cpf, float $valor)
    {
        $this->cpf = $cpf;
        $this->valor = $valor;
    }

    public function getCPFCorrentista(): string
    {
        return $this->cpf;
    }
    public function getValorMovimento(): float
    {
        return $this->valor;
    }
}

class Gerente implements OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista
    {
        $correntista = NULL;

        foreach ($todosCorrentistas as $correntistaProcurado) {
            if ($correntistaProcurado->getCPFCliente() === $cpfProcurado) {
                $correntista = $correntistaProcurado;
                break;
            }
        }

        return $correntista;
    }
}

$contaFabio = new Correntista('00000000000', 10000);
$contaCarlos = new Correntista('11111111111', 15000);
$contaGuilherme = new Correntista('22222222222', 20000);


$movimentoFabio = new Transferencia('00000000000', 1000);
$movimentoCarlos = new Transferencia('11111111111', 2000);
$movimentoGuilherme = new Transferencia('22222222222', 3000);

$c = [
    $contaFabio,
    $contaCarlos,
    $contaGuilherme
];

$m = [
    $movimentoFabio,
    $movimentoCarlos,
    $movimentoGuilherme
];


function atualizarSaldo(array $todosCorrentistas, array $transferencias): array
{
    foreach ($transferencias as $transferencia) {
        foreach ($todosCorrentistas as $index => $correntista) {
            if ($transferencia->getCPFCorrentista() == $correntista->getCPFCliente()) {
                $saldoAnterior = $correntista->getSaldo();
                $saldoMovimento = $transferencia->getValorMovimento();
                $saldoResultado = $saldoAnterior - $saldoMovimento;
                $todosCorrentistas[$index]->setSaldo($saldoResultado);
            }
        }
    }

    return $todosCorrentistas;
}

$c = atualizarSaldo($c, $m);
