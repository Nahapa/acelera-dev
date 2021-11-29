<?php

$array1 = [
    'nome1' => 'Fabio Alvarenga Silva',
    'nome2' => 'Nilce de Alvarenga Drumond da Silva'
];

$array2 = [
    'nome3' => 'Diego Gomes da Silva',
    'nome4' => 'Hernando Alvarenga Silva'
];

$array_merge = array_merge($array1, $array2);
var_export($array_merge);
