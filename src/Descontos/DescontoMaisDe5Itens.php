<?php

namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItens > 5)
            return $orcamento->valor * .1;

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}