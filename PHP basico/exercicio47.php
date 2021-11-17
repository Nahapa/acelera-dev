<?php

$caminho = 'exercicio47';
if (!is_dir($caminho)) {
    mkdir($caminho);
}

$results = json_decode(file_get_contents('https://random-data-api.com/api/business_credit_card/random_card'), true);

$arquivo = fopen("{$caminho}/cartao.txt", 'w+');
fwrite($arquivo, print_r($results, true));
fclose($arquivo);

$conteudo = json_encode((array) file_get_contents("{$caminho}/cartao.txt"));
var_export($conteudo);
