<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if($this->deveAplicarTaxaMaxima($orcamento))
            return $this->calculaTaxaMaxima($orcamento);

        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;
    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
}