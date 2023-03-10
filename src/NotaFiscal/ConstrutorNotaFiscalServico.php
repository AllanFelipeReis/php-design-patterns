<?php

namespace DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();

        $this->notaFiscal->valorImpostos = $valorNotaFiscal * .06;

        return $this->notaFiscal;
    }
}
?>