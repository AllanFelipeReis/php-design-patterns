<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

abstract class EstadosOrcamento
{
    /**
     * @throws \DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento);

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException("Este orçamento não pode ser aprovado");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException("Este orçamento não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException("Este orçamento não pode ser finalizado");
    }
}