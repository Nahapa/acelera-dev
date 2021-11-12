<?php

function nomePreenchido($nome)
{
    if (empty($nome)) {
        throw new Exception('Nome invalido');
    }

    return $nome;
}

$resultado = [
    'nomes'     => [],
    'errors'    => []
];

try {
    $resultado['nomes'][] = nomePreenchido('fabio');
    $resultado['nomes'][] = nomePreenchido(null);
} catch (Exception $e) {
    $resultado['errors'][] = $e->getMessage();
} finally {
    echo json_encode($resultado);
}
