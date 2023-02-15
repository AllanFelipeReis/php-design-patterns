<?php

namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;

abstract class Desconto 
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;    
    }

    abstract function calculaDesconto(Orcamento $orcamento): float;
}