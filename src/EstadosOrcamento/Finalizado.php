<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;
use DomainException;

class Finalizado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): DomainException
    {   
        return new DomainException(
            "Um orçamento finalizado não pode receber desconto"
        );
    }
}