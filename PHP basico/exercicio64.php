<?php

interface Servicos
{
    public function calculaSalario(int $diasTrabalhados, string $cargo): float;
    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, float $valorGratificacao): float;
}

class Funcionarios implements Servicos
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function calculaSalario(int $diasTrabalhados, string $cargo): float
    {
        $salario = 6500;
        $valorDiaTrabalhado = $salario / 30;

        return (float) ($diasTrabalhados * $valorDiaTrabalhado);
    }

    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, float $valorGratificacao): float
    {
        $salario = 4970;
        $valorDiaTrabalhado = $salario / 30;

        $porcentagemGratificacao = 10;

        if ($diasTrabalhados == 9) {
            $porcentagemGratificacao = 20;
        } else if ($diasTrabalhados >= 10 && $diasTrabalhados <= 15) {
            $porcentagemGratificacao = 50;
        }


        return (float) (($diasTrabalhados * $valorDiaTrabalhado) * (1 + ($porcentagemGratificacao / 100)));
    }

    public function formataCalculaSalario(int $diasTrabalhados, string $cargo): string
    {
        $valorSalario = $this->calculaSalario($diasTrabalhados, $cargo);

        if ($diasTrabalhados >= 15) {
            return "Salario completo: {$valorSalario}";
        }

        $valorSalario *= 0.7;

        return "Salario com desconto: {$valorSalario}";
    }

    public function formataCalculaSalarioComGratificacao(int $diasTrabalhados, string $cargo): string
    {
        $valorSalario = $this->calculaSalarioMaisGratificacao($diasTrabalhados, $cargo);

        if ($diasTrabalhados == 9) {
            return "Salario completo com 20%: {$valorSalario}";
        } else if ($diasTrabalhados <= 15) {
            $porcentagemGratificacao = 50;
        }

        $valorSalario *= 0.7;

        return "Salario completo com 50%: {$valorSalario}";
    }

    public function obterNome()
    {
        return $this->nome;
    }
}

$funcionario = new Funcionarios('Fabio');
$funcionario2 = new Funcionarios('Igor');
echo "Nome: {$funcionario->obterNome()}, ";
echo '<br />';
echo $funcionario->formataCalculaSalario(9, 'Full Stack');
echo '<br />';
echo $funcionario->formataCalculaSalarioComGratificacao(9, 0);
echo '<br />';
echo '<br />';
echo "Nome: {$funcionario2->obterNome()}, ";
echo '<br />';
echo $funcionario2->formataCalculaSalario(12, 'Full Stack');
echo '<br />';
echo $funcionario2->formataCalculaSalarioComGratificacao(12, 0);
