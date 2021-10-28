<?php

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($array as $index => $value) {
    if ($value % 2 === 0) {
        echo "Indice: $index, Valor: $value";
        echo "<br />";
    }
}
