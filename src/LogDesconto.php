<?php

namespace DesignPattern;

class LogDesconto 
{
    public function informar(float $descontoCalculado): void
    {
        // Lib Log
        echo "Salvando Log de desconto: $descontoCalculado";
    }
}