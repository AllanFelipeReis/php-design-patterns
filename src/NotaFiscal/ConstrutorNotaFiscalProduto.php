<?php

namespace DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();

        $this->notaFiscal->valorImpostos = $valorNotaFiscal * .02;

        return $this->notaFiscal;
    }
}
?>