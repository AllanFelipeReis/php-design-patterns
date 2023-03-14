<?php

namespace DesignPattern\NotaFiscal;

use DateTimeImmutable;
use DateTimeInterface;
use DesignPattern\ItemOrcamento;

class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial)
    {
        $this->notaFiscal->cnpjEmpresa = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;
        return $this;
    }

    public function comItem(ItemOrcamento $item)
    {
        $this->notaFiscal->itens[] = $item;
        return $this;
    }

    public function comObservacoes(string $observacoes)
    {
        $this->notaFiscal->observacoes = $observacoes;
        return $this;
    }

    public function comDataEmissao(DateTimeInterface $dataEmissao)
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;
        return $this;
    }

    public function constroi(): NotaFiscal
    {
        return $this->notaFiscal;
    }
}

?>