<?php

namespace DesignPattern;

use ArrayIterator;
use DesignPattern\EstadosOrcamento\Finalizado;
use IteratorAggregate;
use Traversable;

class ListaDeOrcamentos implements IteratorAggregate
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }
}