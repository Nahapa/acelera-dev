<?php

$apis = [
    'https://random-data-api.com/api/stripe/random_stripe',
    'https://random-data-api.com/api/app/random_app',
    'https://random-data-api.com/api/beer/random_beer',
    'https://random-data-api.com/api/commerce/random_commerce',
    'https://random-data-api.com/api/device/random_device',
    'https://random-data-api.com/api/subscription/random_subscription'
];

foreach ($apis as $api) {
    $arquivo = fopen('api.txt', 'a+');
    $result = file_get_contents($api);
    fwrite($arquivo, $result);
    fwrite($arquivo, PHP_EOL);
    fclose($arquivo);
}
