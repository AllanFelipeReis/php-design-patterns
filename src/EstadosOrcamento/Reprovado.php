<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;
use DomainException;

class Reprovado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): DomainException
    {   
        return new DomainException(
            "Um orçamento reprovado não pode receber desconto"
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}