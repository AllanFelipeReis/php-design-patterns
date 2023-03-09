<?php

namespace DesignPattern\Log;

class FileLogWriter implements LogWriter
{
    private $arquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->arquivo = fopen($caminhoArquivo, "a+");
    }

    public function escreve(string $messageFormatada): void
    {
        fwrite($this->arquivo, $messageFormatada . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}