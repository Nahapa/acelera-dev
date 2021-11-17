<?php

class Pessoa
{
    private string $nome;
    private string $cpf;
    private string $endereco;
    private string $nomePai;
    private string $nomeMae;
    private string $rg;
    private string $serialDeIdentificacao;

    public function __construct(
        string $nome,
        string $cpf,
        string $endereco,
        string $nomePai,
        string $nomeMae,
        string $rg,
        string $serialDeIdentificacao
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nomePai = $nomePai;
        $this->nomeMae = $nomeMae;
        $this->rg = $rg;
        $this->serialDeIdentificacao = $serialDeIdentificacao;
    }

    public function __toString()
    {
        return json_encode([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco,
            'nomePai' => $this->nomePai,
            'nomeMae' => $this->nomeMae,
            'rg' => $this->rg,
            'serialDeIdentificacao' => $this->serialDeIdentificacao,
        ]);
    }
}

$pessoa1 = new Pessoa(
    'Iago Pedro Pereira',
    '94789641350',
    'Loteamento Mirante dos Morros',
    'Cauê Kaique Pereira',
    'Sophia Ana',
    '481110471',
    '86981489727'
);
$pessoa2 = new Pessoa(
    'Carla Algusta Dias',
    '52534632590',
    'Rua Seival',
    'Samuel Benedito Dias',
    'Nair Alice',
    '225809564',
    '51987588910'
);

var_dump((string) $pessoa1, (string) $pessoa2);
