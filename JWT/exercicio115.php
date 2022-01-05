<?php

//Application Key
$key = 'Ajhdkajsg665612AAA8]0';

//Header Token
$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

//Payload - Content
$payload = [
    'exp' => (new DateTime("now"))->getTimestamp(),
    'uid' => 1,
    'email' => 'fabio.silva@soluti.com.br',
    'nivel' => 'administrador',
    'favoritos' => []
];

//JSON
$header = json_encode($header);
$payload = json_encode($payload);

//Base 64
$header = base64_encode($header);
$payload = base64_encode($payload);

//Sign
$sign = hash_hmac('sha256', $header . "." . $payload, $key, true);
$sign = base64_encode($sign);

//Token
$token = $header . '.' . $payload . '.' . $sign;

print $token;
