<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Aprovado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {   
        return $orcamento->valor * .02;
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}