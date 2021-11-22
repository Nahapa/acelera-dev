<?php

$precos = [
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100,
    (float) rand(0, 10000) / 100
];

$total = 0;

foreach ($precos as $preco) {
    $total += $preco;
}
$dinheiro = $total * 0.9;
$cartao = $total * 0.95;
$cartaoVezes2 = $total;
$cartaoVezes3 = $total * 1.1;

echo "Forma de pagamento escolhida: À vista em dinheiro, valor original R$ {$total} - Valor Final: {$dinheiro}";
echo '<br />';

echo "Forma de pagamento escolhida: À vista no cartão, valor original R$ {$total} - Valor Final: {$cartao}";
echo '<br />';

echo "Forma de pagamento escolhida: Cartão 2 vezes, valor original R$ {$total} - Valor Final: {$cartaoVezes2}";
echo '<br />';

echo "Forma de pagamento escolhida: Cartão 3 vezes, valor original R$ {$total} - Valor Final: {$cartaoVezes3}";
echo '<br />';
