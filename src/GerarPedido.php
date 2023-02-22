<?php

namespace DesignPattern;

class GerarPedido
{

    private int $valorItens;
    private float $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorItens,
        int $numeroItens,
        string $nomeCliente
    ) {

        $this->valorItens = $valorItens;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorItens(): int
    {
        return $this->valorItens;
    }
    public function getNumeroItens(): float
    {
        return $this->numeroItens;
    }
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }
}