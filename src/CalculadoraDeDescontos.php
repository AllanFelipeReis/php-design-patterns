<?php

namespace DesignPattern;

use DesignPattern\Descontos\DescontoMaisDe500Reais;
use DesignPattern\Descontos\DescontoMaisDe5Itens;
use DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento)
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}