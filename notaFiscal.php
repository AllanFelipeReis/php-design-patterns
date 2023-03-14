<?php

use DesignPattern\ItemOrcamento;
use DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require "vendor/autoload.php";

$builder = new ConstrutorNotaFiscalServico();

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 200;
$item3 = new ItemOrcamento();
$item3->valor = 300;
$notaFiscal  = $builder->paraEmpresa("123123123", "Allan Reis")
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes("Está nota fiscal foi construida com construtor")
    ->constroi();


echo $notaFiscal->valor() . "\n";
echo $notaFiscal->valorImpostos;
?>