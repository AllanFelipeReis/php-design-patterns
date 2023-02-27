<?php

namespace DesignPattern\Relatorio;

use DesignPattern\Orcamento;

class OrcamentoXml
{
    public function exportar(Orcamento $orcamento): string
    {
        $elementoOrcamento = new \SimpleXMLElement("<orcamento />");

        $elementoOrcamento->addChild("valor", $orcamento->valor);
        $elementoOrcamento->addChild("quantitade_itens", $orcamento->quantidadeItens);

        return $elementoOrcamento->asXML();
    }
}