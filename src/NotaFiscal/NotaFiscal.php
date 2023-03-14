<?php

namespace DesignPattern\NotaFiscal;

use DateTimeInterface;
use DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, ItemOrcamento $item) => $item->valor() + $valorAcumulado,
            0
        );
    }

    public function clonar(): NotaFiscal
    {
        $cloneNotaFiscal = new NotaFiscal();

        $cloneNotaFiscal->cnpjEmpresa = $this->cnpjEmpresa;
        $cloneNotaFiscal->razaoSocial = $this->razaoSocial;
        $cloneNotaFiscal->itens = $this->itens;
        $cloneNotaFiscal->observacoes = $this->observacoes;
        $cloneNotaFiscal->dataEmissao = $this->dataEmissao;
        $cloneNotaFiscal->valorImpostos = $this->valorImpostos;

        return $cloneNotaFiscal;
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}

?>