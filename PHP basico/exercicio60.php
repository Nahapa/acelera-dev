<?php

$caminho = 'exercicio60';

if (!is_dir($caminho)) {
    mkdir($caminho);
}

$fotos = file_get_contents('https://jsonplaceholder.typicode.com/photos');

$arquivo1 = fopen("{$caminho}/arquivo1.txt", 'w+');
$arquivo2 = fopen("{$caminho}/arquivo2.txt", 'w+');
$arquivo3 = fopen("{$caminho}/arquivo3.txt", 'w+');

fwrite($arquivo1, $fotos);
fwrite($arquivo2, $fotos);
fwrite($arquivo3, $fotos);

fclose($arquivo1);
fclose($arquivo2);
fclose($arquivo3);

unlink("{$caminho}/arquivo2.txt");

try {
    if (!is_file("{$caminho}/arquivo2.txt")) {
        throw new Exception('Arquivo não encontrado');
    }

    fopen("{$caminho}/arquivo2.txt", 'r');
} catch (Exception $e) {
    echo $e->getMessage();
    echo '<br />';
}

$arquivo1 = json_decode(file_get_contents("{$caminho}/arquivo1.txt"), true);
$arquivo3 = json_decode(file_get_contents("{$caminho}/arquivo3.txt"), true);

var_export($arquivo1);
echo '<br />';
var_export($arquivo3);
