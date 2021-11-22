<?php

interface Arma
{
    public function usarArma(): void;
}

class Machado implements Arma
{
    public function usarArma(): void
    {
    }
}

class ArcoEFlexa implements Arma
{
    public function usarArma(): void
    {
    }
}

class Espada implements Arma
{
    public function usarArma(): void
    {
    }
}

class Faca implements Arma
{
    public function usarArma(): void
    {
    }
}

abstract class Personagem
{
    private Arma $arma;

    public function lutar(): void
    {
    }
}

class Rei extends Personagem
{
}

class Rainha extends Personagem
{
}

class Duende extends Personagem
{
}

class Guerreiro extends Personagem
{
}
