<?php

include_once('exercicio80/autoload.php');

$estoque = [
    '1'     => new Leite(1, 3.50, 'Itambe', '1L', '2021-11-20'),
    '2'     => new Leite(2, 3.60, 'Italac', '1L', '2021-11-21'),
    '3'     => new Leite(3, 3.30, 'Piracanjuba', '1L', '2021-11-22'),
    '4'     => new Leite(4, 4, 'Ninho', '1L', '2021-11-26'),
    '5'     => new Leite(5, 3.70, 'Parmalat', '1L', '2021-12-25'),
    '6'     => new Leite(6, 3, 'Porto Alegre', '1L', '2021-12-26'),
    '7'     => new DVD(7, 10, 'Rambo – A Última Batalha	', '2020'),
    '8'     => new DVD(8, 10, 'Maléfica 2: Mestre do Mal	', '2020'),
    '9'     => new DVD(9, 10, 'Bem-Vindos a Marwen	', '2019'),
    '10'    => new DVD(10, 10, 'Brightburn: O Filho do Mal	', '2019'),
];

foreach ($estoque as $produto) {
    if ($produto instanceof Leite) {
        if ($produto->estaVencido()) {
            echo "Leite {$produto->marca} esta vencido.";
            echo '<br />';
        }
    } else {
        $ano = 2020;
        if ($produto->ano == $ano) {
            echo "DVD {$produto->titulo} lançado em {$ano}";
            echo '<br />';
        }
    }
}
