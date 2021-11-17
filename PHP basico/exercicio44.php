<?php

$caminho = 'exercicio44';
if (!is_dir($caminho)) {
    mkdir($caminho);
}

$ceps = [];

function curl($url)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
}

$ceps[] = curl('https://viacep.com.br/ws/35162185/json/');
$ceps[] = curl('https://viacep.com.br/ws/33826050/json/');
$ceps[] = curl('https://viacep.com.br/ws/31812270/json/');
$ceps[] = curl('https://viacep.com.br/ws/30290619/json/');
$ceps[] = curl('https://viacep.com.br/ws/35501027/json/');
$ceps[] = curl('https://viacep.com.br/ws/33882209/json/');
$ceps[] = curl('https://viacep.com.br/ws/32230030/json/');
$ceps[] = curl('https://viacep.com.br/ws/35303006/json/');
$ceps[] = curl('https://viacep.com.br/ws/33015650/json/');
$ceps[] = curl('https://viacep.com.br/ws/35501391/json/');
$ceps[] = curl('https://viacep.com.br/ws/32017010/json/');
$ceps[] = curl('https://viacep.com.br/ws/32681568/json/');
$ceps[] = curl('https://viacep.com.br/ws/38051530/json/');
$ceps[] = curl('https://viacep.com.br/ws/30622050/json/');
$ceps[] = curl('https://viacep.com.br/ws/30670190/json/');

$ceps = json_encode($ceps);

$arquivo = fopen("{$caminho}/ceps.txt", 'w+');
fwrite($arquivo, $ceps);
fclose($arquivo);
