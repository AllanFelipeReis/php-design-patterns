<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas
{
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .02;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .03;
    }

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }
}