<?php

function divisao(float $num1, float $num2)
{
    if ($num2 == 0) {
        return 'DIVISÃO POR ZERO';
    }

    return (float) $num1 / $num2;
}
