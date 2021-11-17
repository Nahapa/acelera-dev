<?php

class Pessoa
{
    protected string $nome;
    protected string $cpf;
    protected string $endereco;
    protected string $nomePai;
    protected string $nomeMae;
    protected string $rg;
    protected string $serialDeIdentificacao;

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
            'nome'      => $this->nome,
            'cpf'       => $this->cpf,
            'endereco'  => $this->endereco,
            'nomePai'   => $this->nomePai,
            'nomeMae'   => $this->nomeMae,
            'rg'        => $this->rg,
            'serialDeIdentificacao' => $this->serialDeIdentificacao,
        ]);
    }
}

class Secretaria extends Pessoa
{
    private int $id;
    private string $funcao;
    private string $horaTrabalhada;
    private string $horasExtras;

    public function __construct(
        string $nome,
        string $cpf,
        string $endereco,
        string $nomePai,
        string $nomeMae,
        string $rg,
        string $serialDeIdentificacao,
        int $id,
        string $funcao,
        string $horaTrabalhada,
        string $horasExtras
    ) {
        parent::__construct(
            $nome,
            $cpf,
            $endereco,
            $nomePai,
            $nomeMae,
            $rg,
            $serialDeIdentificacao
        );

        $this->id = $id;
        $this->funcao = $funcao;
        $this->horaTrabalhada = $horaTrabalhada;
        $this->horasExtras = $horasExtras;
    }

    public function __toString()
    {
        return json_encode([
            'nome'                  => $this->nome,
            'cpf'                   => $this->cpf,
            'endereco'              => $this->endereco,
            'nomePai'               => $this->nomePai,
            'nomeMae'               => $this->nomeMae,
            'rg'                    => $this->rg,
            'serialDeIdentificacao' => $this->serialDeIdentificacao,
            'id'                    => $this->id,
            'funcao'                => $this->funcao,
            'horaTrabalhada'        => $this->horaTrabalhada,
            'horasExtras'           => $this->horasExtras
        ]);
    }
}

$secretario = new Secretaria(
    'Carla Algusta Dias',
    '52534632590',
    'Rua Seival',
    'Samuel Benedito Dias',
    'Nair Alice',
    '225809564',
    '51987588910',
    1,
    'Secretario',
    '220:00:00',
    '05:00:00'
);

var_dump((string) $secretario);
