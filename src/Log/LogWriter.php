<?php

namespace DesignPattern\Log;

interface LogWriter
{
    public function escreve(string $messageFormatada): void;
}