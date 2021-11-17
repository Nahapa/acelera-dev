<?php

$paises = json_decode(file_get_contents('exercicio41/paises.txt'), true);
$arquivo = fopen('exercicio42/lista.csv', 'w+');

foreach ($paises as $pais) {
    fputcsv($arquivo, $pais);
}

fclose($arquivo);
