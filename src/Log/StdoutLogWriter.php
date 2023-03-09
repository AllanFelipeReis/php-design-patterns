<?php

namespace DesignPattern\Log;

class StdoutLogWriter implements LogWriter
{
    public function escreve(string $messageFormatada): void
    {
        echo $messageFormatada;
    }
}