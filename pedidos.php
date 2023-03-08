<?php

use DesignPattern\Pedido\TemplatePedido;
use DesignPattern\Orcamento;
use DesignPattern\Pedido\CriadorDePedido;
use DesignPattern\Pedido\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();

for($i = 0; $i < 10000; $i++)
{
    $pedido = $criadorPedido->criaPedido(
        "Allan Reis",
        date("Y-m-d"),
        new Orcamento()
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();