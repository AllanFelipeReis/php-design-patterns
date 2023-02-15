<?php

use DesignPattern\CalculadoraDeDescontos;
use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Impostos\Iss;
use DesignPattern\Orcamento;

require "vendor/autoload.php";


$calcImpostos = new CalculadoraDeImpostos();
$calcDescontos = new CalculadoraDeDescontos();
$icms = new Icms();
$iss = new Iss();
$orc = new Orcamento();

$orc->valor = 600;
$orc->quantidadeItens = 5;

echo $calcImpostos->calcula($orc, $iss);
echo "\n";
echo $calcDescontos->calculaDescontos($orc);