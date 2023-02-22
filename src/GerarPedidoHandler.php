<?php

namespace DesignPattern;

use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{   
    /** @var AcaoAposGerarPedido */
    private array $acoesAposGerarPedido = [];

    public function __construct()
    {    
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorItens();

        $pedido = new Pedido();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        foreach($this->acoesAposGerarPedido as $acao)
        {
            $acao->executaAcao($pedido);
        }
    }
}