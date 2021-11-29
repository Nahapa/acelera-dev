<?php

$array1 = ['Curso' => 'PHO', 'Curso' => 'Java', 'Curso' => 'Python'];
$array2 = ['Pessoa' => 'Joao', 'Pessoa' => 'Pedro', 'Pessoa' => 'Clara'];
$array3 = ['Loja' => 'Centro', 'Loja' => 'Zona Sul', 'Loja' => 'Zona Oeste'];

foreach ($array1 as $index => $array) {
    echo "Indice: $index, Valor: $array";
    echo '<br />';
}

foreach ($array2 as $index => $array) {
    echo "Indice: $index, Valor: $array";
    echo '<br />';
}

foreach ($array3 as $index => $array) {
    echo "Indice: $index, Valor: $array";
    echo '<br />';
}
