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

class Empregado extends Pessoa
{
    private int $id;
    private string $funcao;
    private float $salario;
    private string $horarioEntrada;
    private string $horarioSaida;
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
        float $salario,
        string $horarioEntrada,
        string $horarioSaida,
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
        $this->salario = $salario;
        $this->horarioEntrada = $horarioEntrada;
        $this->horarioSaida = $horarioSaida;
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
            'salario'               => $this->salario,
            'horarioEntrada'        => $this->horarioEntrada,
            'horarioSaida'          => $this->horarioSaida,
            'horasExtras'           => $this->horasExtras
        ]);
    }

    public function obterSalario(): float
    {
        return $this->salario;
    }
}

$empregado = new Empregado(
    'Iago Pedro Pereira',
    '94789641350',
    'Loteamento Mirante dos Morros',
    'Cauê Kaique Pereira',
    'Sophia Ana',
    '481110471',
    '86981489727',
    1,
    'Administrador',
    5000,
    '08:00:00',
    '18:00:00',
    '05:00:00'
);

$empregado2 = new Empregado(
    'Nelson Pietro Lopes',
    '77608286598',
    'Rua Antônio Cândido de Carvalho',
    'Breno Martin Lopes',
    'Rafaela Luciana Nina',
    '105576505',
    '67995391381',
    2,
    'Contador',
    8000,
    '08:00:00',
    '18:00:00',
    '02:00:00'
);

$empregado3 = new Empregado(
    'Caleb Miguel da Paz',
    '31224531507',
    'Rua das Flores',
    'Antonio César Danilo da Paz',
    'Sabrina Marina Teresinha',
    '177384931',
    '69982268469',
    3,
    'CEO',
    12000,
    '08:00:00',
    '17:00:00',
    '09:00:00'
);

$empregados = [
    $empregado,
    $empregado2,
    $empregado3
];

usort($empregados, fn ($a, $b) => $a->obterSalario() < $b->obterSalario() ? 1 : -1);

var_dump($empregados);
