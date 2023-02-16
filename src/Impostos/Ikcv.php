<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Ikcv extends ImpostoCom2Aliquotas
{
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .025;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .04;
    }

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }
}