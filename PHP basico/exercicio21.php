<?php

$variavel1 = null;
$variavel2 = 0;
$variavel3 = [];
$variavel4 = 1;
$variavel5 = 'a';

if (is_null($variavel1)) {
    echo 'Variavel1: Essa variável é nula';
    echo '<br />';
} else if (is_array($variavel1)) {
    echo 'Variavel1: ';
    var_export($variavel1);
    echo '<br />';
} else {
    echo 'Variavel1: ';
    echo $variavel1;
    echo '<br />';
}

if (is_null($variavel2)) {
    echo 'Variavel2: Essa variável é nula';
    echo '<br />';
} else if (is_array($variavel2)) {
    echo 'Variavel2: ';
    var_export($variavel2);
    echo '<br />';
} else {
    echo 'Variavel2: ';
    echo $variavel2;
    echo '<br />';
}

if (is_null($variavel3)) {
    echo 'Variavel3: Essa variável é nula';
    echo '<br />';
} else if (is_array($variavel3)) {
    echo 'Variavel3: ';
    var_export($variavel3);
    echo '<br />';
} else {
    echo 'Variavel3: ';
    echo $variavel3;
    echo '<br />';
}

if (is_null($variavel4)) {
    echo 'Variavel4: Essa variável é nula';
    echo '<br />';
} else if (is_array($variavel4)) {
    echo 'Variavel4: ';
    var_export($variavel4);
    echo '<br />';
} else {
    echo 'Variavel4: ';
    echo $variavel4;
    echo '<br />';
}

if (is_null($variavel5)) {
    echo 'Variavel5: Essa variável é nula';
    echo '<br />';
} else if (is_array($variavel5)) {
    echo 'Variavel5: ';
    var_export($variavel5);
    echo '<br />';
} else {
    echo 'Variavel5: ';
    echo $variavel5;
    echo '<br />';
}
