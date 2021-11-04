<?php

$salarioMin = 1000;
$descontoDep = 5;

$contribuintes = [
    [
        'nome'  => 'Fabio Alvarenga Silva',
        'cpf'   => '12345678911',
        'n_dep' => 0,
        'renda' => 15000
    ],
    [
        'nome'  => 'Nilce de Alvarenga Drumond da Silva',
        'cpf'   => '12345678912',
        'n_dep' => 4,
        'renda' => 5000
    ],
    [
        'nome'  => 'Diego Gomes da Silva',
        'cpf'   => '01234567890',
        'n_dep' => 1,
        'renda' => 2000
    ]
];

echo "Salario minimo: {$salarioMin}";
echo '<br />';
echo '<br />';

foreach ($contribuintes as $contribuinte) {
    $desconto = 0;
    if ($contribuinte['n_dep']) {
        $desconto = $salarioMin * (1 - ((100 - ($contribuinte['n_dep'] * $descontoDep)) / 100));
    }

    if ($contribuinte['renda'] > $salarioMin * 3) {
        $imposto = $contribuinte['renda'] * 0.1;
        $imposto -= $desconto;
    } elseif ($contribuinte['renda'] > $salarioMin * 2) {
        $imposto -= $contribuinte['renda'] * 0.05;
        $imposto -= $desconto;
    } else {
        $imposto = 0;
        $desconto = 0;
    }

    echo "Nome: {$contribuinte['nome']},";
    echo '<br />';
    echo "Renda: {$contribuinte['renda']}";
    echo '<br />';
    echo "Dependentes: {$contribuinte['n_dep']}";
    echo '<br />';
    echo "Desconto: {$desconto}";
    echo '<br />';
    echo "Imposto: {$imposto}";
    echo '<br />';
    echo '<br />';
}
