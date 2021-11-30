<?php

interface Carro
{
    public function valorDesconto(): float;
}

interface Caracteristica
{
    public function valorDesconto(): float;
}

class BMW implements Carro
{
    private Caracteristica $caracteristica;

    public function __construct(Caracteristica $caracteristica)
    {
        $this->caracteristica = $caracteristica;
    }

    public function valorDesconto(): float
    {
        return 5;
    }
}

class Mercedes implements Carro
{
    private Caracteristica $caracteristica;

    public function __construct(Caracteristica $caracteristica)
    {
        $this->caracteristica = $caracteristica;
    }

    public function valorDesconto(): float
    {
        return 10;
    }
}

class Fiat implements Carro
{
    private Caracteristica $caracteristica;

    public function __construct(Caracteristica $caracteristica)
    {
        $this->caracteristica = $caracteristica;
    }

    public function valorDesconto(): float
    {
        return 10;
    }
}

class Ret implements Caracteristica
{
    public function valorDesconto(): float
    {
        return 10;
    }
}

class QuatroPorQuatro implements Caracteristica
{
    public function valorDesconto(): float
    {
        return 10;
    }
}

class Esportivo implements Caracteristica
{
    public function valorDesconto(): float
    {
        return 15;
    }
}

class cupom
{
    public function geradorDeCupom(Carro $carro)
    {
        // $marca->
    }
}

$esportivo = new Esportivo();
$mercedes = new Mercedes($esportivo);

function geradorDeCupom($car)
{
    $discount = 0;
    $is4x4 = false;
    $ret = false;
    $esportivo = false;
    if ($car == "bmw") {
        if (!$is4x4) {
            $discount += 5;
        }
        if ($ret) {
            $discount += 7;
        }
        if ($esportivo) {
            $discount += 9;
        }
    } else if ($car == "mercedes") {
        if (!$is4x4) {
            $discount += 10;
        }
        if ($ret) {
            $discount += 18;
        }
        if ($esportivo) {
            $discount += 19;
        }
    }
    return $cupoun = "Cupom {$discount}% off para passar no pedágio";
}

echo geradorDeCupom("bmw");
echo geradorDeCupom("mercedes");
