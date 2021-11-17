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

class Atendente extends Pessoa
{
    private int $id;
    private string $funcao;
    private string $horarioEntrada;
    private string $horarioSaida;

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
        string $horarioEntrada,
        string $horarioSaida
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
        $this->horarioEntrada = $horarioEntrada;
        $this->horarioSaida = $horarioSaida;
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
            'horarioEntrada'        => $this->horarioEntrada,
            'horarioSaida'          => $this->horarioSaida
        ]);
    }
}

$atendente = new Atendente(
    'Iago Pedro Pereira',
    '94789641350',
    'Loteamento Mirante dos Morros',
    'Cauê Kaique Pereira',
    'Sophia Ana',
    '481110471',
    '86981489727',
    1,
    'Atendente',
    '08:00:00',
    '18:00:00'
);

echo $atendente;
