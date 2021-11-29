<?php

$inicialFahrenheit = 32;
$finalFahrenheit = 100;

$inicialCelsius = (int) (5 / 9 * ($inicialFahrenheit - 32));
$finalCelsius = (int) (5 / 9 * ($finalFahrenheit - 32));

echo "Inicial graus em Fahrenheit: {$inicialFahrenheit}, inicial em graus Celsius: {$inicialCelsius}";
echo '<br />';

echo "Final graus em : {$finalFahrenheit}, final em graus Celsius: {$finalCelsius}";
echo '<br />';
