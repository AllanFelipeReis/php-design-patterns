<?php

require_once 'vendor/autoload.php';

use DesignPattern\{Orcamento, Pedido};
use DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado, ArquivoXmlExportado, ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXML = new ArquivoXmlExportado("orcamento");

echo $orcamentoExportadoXML->salvar($orcamentoExportado);