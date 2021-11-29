<?php

function passou($n1, $n2)
{
    if ($n1 < 7 || $n2 < 7 || ($n1 + $n2 < 19)) {
        return false;
    }

    return true;
}

$n1 = [
    'Renan'     => random_int(0, 15),
    'Davi'      => random_int(0, 15),
    'Yasmin'    => random_int(0, 15),
    'Mariana'   => random_int(0, 15),
    'Lara'      => random_int(0, 15),
    'Brenda'    => random_int(0, 15),
    'Marisa'    => random_int(0, 15),
    'Victor'    => random_int(0, 15),
    'Marcos'    => random_int(0, 15),
    'Gabrielle' => random_int(0, 15),
    'Felipe'    => random_int(0, 15),
    'Kauan'     => random_int(0, 15),
    'Camila'    => random_int(0, 15),
    'Isabela'   => random_int(0, 15),
    'Isabella'  => random_int(0, 15),
    'Joao'      => random_int(0, 15)
];

$n2 = [
    'Renan'     => random_int(0, 15),
    'Davi'      => random_int(0, 15),
    'Yasmin'    => random_int(0, 15),
    'Mariana'   => random_int(0, 15),
    'Lara'      => random_int(0, 15),
    'Brenda'    => random_int(0, 15),
    'Marisa'    => random_int(0, 15),
    'Victor'    => random_int(0, 15),
    'Marcos'    => random_int(0, 15),
    'Gabrielle' => random_int(0, 15),
    'Felipe'    => random_int(0, 15),
    'Kauan'     => random_int(0, 15),
    'Camila'    => random_int(0, 15),
    'Isabela'   => random_int(0, 15),
    'Isabella'  => random_int(0, 15),
    'Joao'      => random_int(0, 15)
];

$arquivo = fopen('exercicio53/aluno-aprovados.txt', 'w+');

foreach ($n1 as $nome => $nota1) {
    $resultado = passou($nota1, $n2[$nome]);

    if ($resultado) {
        fwrite($arquivo, $nome . PHP_EOL);
    }
}
fclose($arquivo);
