<?php

namespace DesignPattern;

use DesignPattern\EstadosOrcamento\Aprovado;
use DesignPattern\EstadosOrcamento\EmAprovacao;
use DesignPattern\EstadosOrcamento\EstadosOrcamento;
use DesignPattern\EstadosOrcamento\Finalizado;
use DesignPattern\EstadosOrcamento\Reprovado;
use DesignPattern\Orcavel as DesignPatternOrcavel;

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadosOrcamento $estadoAtual;

    public function __construct()
    {   
        $this->itens = [];
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

    public function addItem(Orcavel $item)
    {
        $this->itens[] = $item;
        return $this;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            0
        );
    }
}