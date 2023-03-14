<?php

use DesignPattern\Venda\VendaProdutoFactory;
use DesignPattern\Venda\VendaServicoFactory;

require_once "vendor/autoload.php";

// $fabricaVenda = new VendaServicoFactory("Allan Reis");
$fabricaVenda = new VendaProdutoFactory(1000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
?>