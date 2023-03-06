<?php

use DesignPattern\CacheOrcamentoProxy;
use DesignPattern\ItemOrcamento;
use DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamentoAntigo = new Orcamento();

$item1 = new ItemOrcamento();
$item2 = new ItemOrcamento();
$item3 = new ItemOrcamento();

$item1->valor = 500;
$item2->valor = 300;
$item3->valor = 800;

$orcamentoAntigo->addItem($item3);

$orcamento->addItem($item1);
$orcamento->addItem($item2);
$orcamento->addItem($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;