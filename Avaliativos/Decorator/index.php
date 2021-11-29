<?php

require 'vendor/autoload.php';

use Decorator\Doce;
use Decorator\Geleia;
use Decorator\Margarina;
use Decorator\Mussarela;
use Decorator\Ovo;
use Decorator\PastaDeAmendoim;
use Decorator\Sal;
use Decorator\Salame;

// Combinações

//Sal: salame + mussarela
$combinacao1 = new Sal();
$combinacao1 = new Salame($combinacao1);
$combinacao1 = new Mussarela($combinacao1);
echo "Nome: {$combinacao1->getNome()} <br />";
echo "Valor: {$combinacao1->valor()} <br />";
echo '<hr>';

//Sal: salame
$combinacao2 = new Sal();
$combinacao2 = new Salame($combinacao2);
echo "Nome: {$combinacao2->getNome()} <br />";
echo "Valor: {$combinacao2->valor()} <br />";
echo '<hr>';

// Sal: mussarela
$combinacao3 = new Sal();
$combinacao3 = new Mussarela($combinacao3);
echo "Nome: {$combinacao3->getNome()} <br />";
echo "Valor: {$combinacao3->valor()} <br />";
echo '<hr>';

// Sal: ovo + mussarela
$combinacao4 = new Sal();
$combinacao4 = new Ovo($combinacao4);
$combinacao4 = new Mussarela($combinacao4);
echo "Nome: {$combinacao4->getNome()} <br />";
echo "Valor: {$combinacao4->valor()} <br />";
echo '<hr>';

// Sal: ovo + margarina
$combinacao5 = new Sal();
$combinacao5 = new Ovo($combinacao5);
$combinacao5 = new Margarina($combinacao5);
echo "Nome: {$combinacao5->getNome()} <br />";
echo "Valor: {$combinacao5->valor()} <br />";
echo '<hr>';

// Sal: margarina
$combinacao6 = new Sal();
$combinacao6 = new Margarina($combinacao6);
echo "Nome: {$combinacao6->getNome()} <br />";
echo "Valor: {$combinacao6->valor()} <br />";
echo '<hr>';

// Sal: ovo
$combinacao7 = new Sal();
$combinacao7 = new Ovo($combinacao7);
echo "Nome: {$combinacao7->getNome()} <br />";
echo "Valor: {$combinacao7->valor()} <br />";
echo '<hr>';

// Doce: Geleia	
$combinacao8 = new Doce();
$combinacao8 = new Geleia($combinacao8);
echo "Nome: {$combinacao8->getNome()} <br />";
echo "Valor: {$combinacao8->valor()} <br />";
echo '<hr>';

// Doce: Geleia + Salame
$combinacao9 = new Doce();
$combinacao9 = new Geleia($combinacao9);
$combinacao9 = new Salame($combinacao9);
echo "Nome: {$combinacao9->getNome()} <br />";
echo "Valor: {$combinacao9->valor()} <br />";
echo '<hr>';

// Doce: Pasta de Amendoim + Geleia
$combinacao10 = new Doce();
$combinacao10 = new PastaDeAmendoim($combinacao10);
$combinacao10 = new Geleia($combinacao10);
echo "Nome: {$combinacao10->getNome()} <br />";
echo "Valor: {$combinacao10->valor()} <br />";
echo '<hr>';

// Doce: Salame
$combinacao11 = new Doce();
$combinacao11 = new Salame($combinacao11);
echo "Nome: {$combinacao11->getNome()} <br />";
echo "Valor: {$combinacao11->valor()} <br />";
echo '<hr>';

// Doce: Pasta de Amendoim
$combinacao12 = new Doce();
$combinacao12 = new PastaDeAmendoim($combinacao12);
echo "Nome: {$combinacao12->getNome()} <br />";
echo "Valor: {$combinacao12->valor()} <br />";
echo '<hr>';
