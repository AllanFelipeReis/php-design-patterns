<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando Log de geração de pedido" . PHP_EOL;
    }
}