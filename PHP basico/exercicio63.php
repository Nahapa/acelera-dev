<?php

class Porta
{
    private bool $aberta;
    private string $cor;
    private float $dimensaoX;
    private float $dimensaoY;
    private float $dimensaoZ;

    public function abre(): void
    {
        $this->aberta = true;
    }

    public function fecha(): void
    {
        $this->aberta = false;
    }

    public function pinta(string $cor): void
    {
        $this->cor = $cor;
    }

    public function obterAberta(): bool
    {
        return $this->aberta;
    }
}

class Imovel
{
    private string $cor;

    public function pinta(string $cor): void
    {
        $this->cor = $cor;
    }
}

class Casa extends Imovel
{
    private Porta $porta1, $porta2, $porta3;

    public function quantasPortasEstaoAbertas(): int
    {
        $quantidade = 0;

        if ($this->porta1->obterAberta()) {
            $quantidade++;
        }

        if ($this->porta2->obterAberta()) {
            $quantidade++;
        }

        if ($this->porta3->obterAberta()) {
            $quantidade++;
        }

        return $quantidade;
    }
}

class Edificio extends Imovel
{
    private int $totalDePortas;
    private int $totalDeAndares;
    private array $portas;

    public function quantasPortasEstaoAberta(): int
    {
        $quantidade = 0;

        foreach ($this->portas as $porta) {
            if ($porta->obterAberta()) {
                $quantidade++;
            }
        }

        return $quantidade;
    }

    public function adicionaPorta(Porta $porta): void
    {
        $this->portas[] = $porta;
        $this->totalDePortas++;
    }

    public function totalDePortas(): int
    {
        return $this->totalDePortas;
    }

    public function adicionarAndar(): void
    {
        $this->totalDeAndares++;
    }

    public function totalDeAndares(): int
    {
        return $this->totalDeAndares;
    }
}
