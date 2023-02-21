<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class EmAprovacao extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {   
        return $orcamento->valor * .05;
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}