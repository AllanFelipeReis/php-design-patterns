<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Reprovado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {   
        return new \DomainException(
            "Um orçamento reprovado não pode receber desconto"
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}