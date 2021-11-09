<?php

$pasta = scandir('exercicio43');
unset($pasta[0], $pasta[1]);

foreach ($pasta as $arquivo) {
    var_dump(pathinfo($arquivo));
    echo '<br />';
}
