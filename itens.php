<?php

use DesignPattern\ItemOrcamento;
use DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();

$item1 = new ItemOrcamento();
$item2 = new ItemOrcamento();

$item1->valor = 500;
$item2->valor = 300;

$orcamento->addItem($item1)->addItem($item2);

echo $orcamento->valor();