<?php

namespace DesignPattern;

class GerarPedido
{

    private int $valorItens;
    private float $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorItens,
        int $numeroItens,
        string $nomeCliente
    ) {

        $this->valorItens = $valorItens;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {
        
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorItens;

        $pedido = new Pedido();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia e-mail para o cliente" . PHP_EOL;
    }
}