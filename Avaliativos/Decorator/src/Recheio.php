<?php

namespace Decorator;

interface Recheio extends Pao
{
    public function getNome(): string;
    public function valor(): float;
}
