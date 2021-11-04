<?php

$clientes = [
    'Joaquim' => '28,m',
    'Maria' => '41,f',
    'Pedro' => '18,m',
    'Joana Silva' => '58,f',
    'João Lopes' => '21,m',
    'Joana' => '15,f',
    'Fernanda' => '25,f'
];

$masculino = [];
$feminino = [];

foreach ($clientes as $nome => $cliente) {
    list($idade, $sexo) = explode(',', $cliente);
    if ($sexo == 'm') {
        $sexo = 'H';
        $masculino[] = [
            'nome'  => $nome,
            'idade' => $idade,
            'sexo'  => $sexo
        ];
    } else {
        $sexo = 'F';
        $feminino[] = [
            'nome'  => $nome,
            'idade' => $idade,
            'sexo'  => $sexo
        ];
    }
    echo "Nome: {$nome}, idade: {$idade}, sexo = $sexo";
    echo '<br />';
}

echo '<br />';
echo 'Masculino: ';
var_dump($masculino);
echo '<br />';
echo '<br />';
echo 'Feminino: ';
var_dump($feminino);
