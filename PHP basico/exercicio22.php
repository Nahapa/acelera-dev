<?php

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];
$array3 = [101, 102, 103, 104, 5];
$array4 = [91, 92, 93, 94, 95];
$array5 = [51, 52, 53, 54, 55];

foreach ($array1 as $index => $value) {
    echo "Indice: $index, Valor: $value";
    echo '<br />';
}

foreach ($array2 as $index => $value) {
    echo "Indice: $index, Valor: $value";
    echo '<br />';
}

foreach ($array3 as $index => $value) {
    echo "Indice: $index, Valor: $value";
    echo '<br />';
}

foreach ($array4 as $index => $value) {
    echo "Indice: $index, Valor: $value";
    echo '<br />';
}

foreach ($array5 as $index => $value) {
    echo "Indice: $index, Valor: $value";
    echo '<br />';
}
echo "Array1: ";
var_export($array1);
echo '<br />';

echo "Array2: ";
var_export($array2);
echo '<br />';

echo "Array3: ";
var_export($array3);
echo '<br />';

echo "Array4: ";
var_export($array4);
echo '<br />';

echo "Array5: ";
var_export($array5);
echo '<br />';
