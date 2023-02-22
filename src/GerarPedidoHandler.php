<?php

namespace DesignPattern;

class GerarPedidoHandler
{
    public function __construct()
    {
        
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

        // PedidosRepository
        echo "Cria pedido no banco de dados" . PHP_EOL;
        // MailService
        echo "Envia e-mail para o cliente" . PHP_EOL;
    }
}