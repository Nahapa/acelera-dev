<?php

function divisao($n1, $n2)
{
    if ($n2 === 0) {
        throw new Exception('Não é possivel fazer divisão por 0', 523);
    }

    return $n1 / $n2;
}

try {
    echo divisao(10, 2);
    echo '<br />';
    echo divisao(26, 0);
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}, Codigo: 523";
}
