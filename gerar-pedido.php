<?php

use DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use DesignPattern\GerarPedido;
use DesignPattern\GerarPedidoHandler;

require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());

$gerarPedidoHandler->execute($gerarPedido);


