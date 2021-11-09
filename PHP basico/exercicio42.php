<?php

$paises = json_decode(file_get_contents('paises.txt'), true);
$arquivo = fopen('lista.csv', 'w+');

foreach ($paises as $pais) {
    fputcsv($arquivo, $pais);
}

fclose($arquivo);
