<?php

use DesignPattern\Http\CurlHttpAdapter;
use DesignPattern\Http\ReactPHPHttpAdapter;
use DesignPattern\Orcamento;
use DesignPattern\RegistroOrcamento;

require_once "vendor/autoload.php";

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter);
$registroOrcamento->registrar(new Orcamento());