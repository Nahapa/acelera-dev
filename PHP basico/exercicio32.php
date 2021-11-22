<?php

require_once('./exercicio32/cardapioFunctions.php');

$categorias = [
    'salgados'          => [
        'Coxinha',
        'Croquete',
        'Salsicha',
        'Quibe',
        'Pastel',
        'Tortinha',
        'Espetinho'
    ],
    'acompanhamentos'   => [
        'Ketchup',
        'Maionese',
        'Mostarda',
        'Barbecue',
        'Alho',
    ],
    'refrigerantes'     => [
        'Coca-cola',
        'Guarana'
    ]
];

foreach ($categorias as $categoria => $itens) {
    $validaCategoria = validaCategoria($itens);
    if ($validaCategoria < 0) {
        echo "A categoria {$categoria} não obecede a quantidade minima";
    } else if ($validaCategoria > 0) {
        echo "A categoria {$categoria} não obecede a quantidade maxima";
    } else {
        echo "A categoria {$categoria} obedece os requisitos";
    }

    echo '<br />';
}
