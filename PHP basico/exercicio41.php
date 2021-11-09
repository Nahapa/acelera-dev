<?php

$resultado = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/paises');
$arquivo = fopen('paises.txt', 'w+');
fwrite($arquivo, $resultado);
fclose($arquivo);
