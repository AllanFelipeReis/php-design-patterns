<?php

namespace DesignPattern\Venda;

use DateTimeInterface;

abstract class Venda
{
    public DateTimeInterface $dataRealizacao;

    public function __construct(DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}
?>
