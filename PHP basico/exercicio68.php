<?php
interface Animal
{
    public function getNomeEspecie(): string;
    public function getNomeAnimal(): string;
}

interface Ferramentas
{
    public function filtraEspecieAnimal(array $completo, string $specieFiltrar): array;
    public function classificaEspecies(array $completo): array;
}

class Resultado
{
    private string $nomeEspecie;
    private int $quantidade;

    public function __construct(string $nomeEspecie, int $quantidade)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->quantidade = $quantidade;
    }

    public function getNomeEspecie(): string
    {
        return $this->nomeEspecie;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
}
