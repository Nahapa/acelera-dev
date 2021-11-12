<?php

function parOuImpar($n)
{
    if ($n % 2 !== 0) {
        throw new Exception("Número não válido para essa operacao", 535);
    }

    return true;
}

$numeros = [
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100),
    random_int(1, 100)
];

var_dump($numeros);
echo '<br />';
echo '<br />';

try {
    foreach ($numeros as $numero) {
        parOuImpar($numero);
    }
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}, Codigo: {$e->getCode()}";
}
