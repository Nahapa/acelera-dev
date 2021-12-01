<?php
interface Aves
{
    public function andar();
    public function voar();
    public function nadar();
}

interface AvesQueVoam
{
    public function voar();
    public function andar();
}

interface AvesQueNadam
{
    public function nadar();
    public function andar();
}

class Pato implements Aves
{
    public function voar()
    {
        //lógica
    }
    public function nadar()
    {
        //lógica
    }
    public function andar()
    {
        //lógica
    }
}

class Pinguim implements AvesQueNadam
{
    public function nadar()
    {
        //lógica
    }
    public function andar()
    {
        //lógica
    }
}

class Andorinha implements AvesQueVoam
{
    public function voar()
    {
        //lógica
    }
    public function andar()
    {
        //lógica
    }
}
