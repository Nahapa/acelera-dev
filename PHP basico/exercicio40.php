<?php

$caminho = 'exercicio40';
if (!is_dir($caminho)) {
    mkdir($caminho);
}

$arquivo = fopen("{$caminho}/dados.txt", 'w+');
for ($i = 1; $i <= 700; $i++) {
    if ($i % 2 === 0) {
        fwrite($arquivo, $i . PHP_EOL);
    }
}
fclose($arquivo);
