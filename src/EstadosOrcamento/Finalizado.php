<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Finalizado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento)
    {   
        return new \DomainException(
            "Um orçamento finalizado não pode receber desconto"
        );
    }
}