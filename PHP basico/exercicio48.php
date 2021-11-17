<?php

$caminho = 'exercicio48';
if (!is_dir($caminho)) {
    mkdir($caminho);
}

$apis = [
    'https://random-data-api.com/api/stripe/random_stripe',
    'https://random-data-api.com/api/app/random_app',
    'https://random-data-api.com/api/beer/random_beer',
    'https://random-data-api.com/api/commerce/random_commerce',
    'https://random-data-api.com/api/device/random_device',
    'https://random-data-api.com/api/subscription/random_subscription'
];

$arquivo = fopen("{$caminho}/api.txt", 'w+');
fclose($arquivo);

$results = [];

foreach ($apis as $api) {
    $arquivo = fopen("{$caminho}/api.txt", 'a+');
    $result = file_get_contents($api);
    fwrite($arquivo, $result);
    fwrite($arquivo, PHP_EOL);
    fclose($arquivo);
}

$arquivo = fopen("{$caminho}/api.txt", 'r');
while (true) {
    $linha = fgets($arquivo);
    if ($linha == null) break;
    $results[] = json_decode($linha, true);
}
fclose($arquivo);

var_export($results);
