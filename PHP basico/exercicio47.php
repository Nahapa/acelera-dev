<?php

$results = json_decode(file_get_contents('https://random-data-api.com/api/business_credit_card/random_card'), true);

$arquivo = fopen('cartao.txt', 'w+');
fwrite($arquivo, print_r($results, true));
fclose($arquivo);

$conteudo = json_encode((array) file_get_contents('cartao.txt'));
var_export($conteudo);
