<?php

namespace DesignPattern;

use DesignPattern\EstadosOrcamento\Aprovado;
use DesignPattern\EstadosOrcamento\EmAprovacao;
use DesignPattern\EstadosOrcamento\EstadosOrcamento;
use DesignPattern\EstadosOrcamento\Finalizado;
use DesignPattern\EstadosOrcamento\Reprovado;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;
    public EstadosOrcamento $estadoAtual;

    public function __construct()
    {   
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
}