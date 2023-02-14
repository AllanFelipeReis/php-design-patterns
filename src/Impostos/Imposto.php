<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}