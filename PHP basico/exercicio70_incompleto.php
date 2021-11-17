<?php

interface Animal
{
}

interface AnimalOrcamento extends Animal
{
    public function orcamentoGastosAnimal(): ItemOrcamentoComplexo;
}
