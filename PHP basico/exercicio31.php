<?php

$results = json_decode(file_get_contents('https://rickandmortyapi.com/api'), true);

if (empty($results)) {
    echo "Você não pode continuar";
} else {
    if (is_array($results)) {
        var_dump($results);
    } else {
        echo 'Tipo de dado diferente de array';
    }
}
