<?php

class ItemOrcamento
{
    private string $historico;
    private float $valor;

    public function __construct(string $historico, float $valor)
    {
        $this->historico = $historico;
        $this->valor = $valor;
    }

    public function getHistorico(): string
    {
        return $this->historico;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}

class ItemOrcamentoComplexo extends ItemOrcamento
{
    private array $subItens;

    public function __construct(string $historico, float $valor, array $subItens)
    {
        parent::__construct($historico, $valor);
        $this->subItens = $subItens;
    }

    public function getValor(): float
    {
        $total = 0;
        foreach ($this->subItens as $subItem) {
            $total += $subItem->getValor();
        }

        return (float) $total;
    }

    public function encontraItem(string $historico): ?string
    {
        $item = NULL;
        foreach ($this->subItens as $subItem) {
            if ($historico == $subItem->getHistorico()) {
                $item = $subItem;
                break;
            }
        }

        return $item;
    }
}
