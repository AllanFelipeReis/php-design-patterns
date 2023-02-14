<?php

use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Impostos\Iss;
use DesignPattern\Orcamento;

require "vendor/autoload.php";


$calc = new CalculadoraDeImpostos();
$icms = new Icms();
$iss = new Iss();
$orc = new Orcamento();

$orc->valor = 100;

echo $calc->calcula($orc, $iss);