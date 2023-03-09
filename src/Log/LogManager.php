<?php

namespace DesignPattern\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        $logWriter = $this->criarLogWriter();

        $dataHoje = date("d/m/Y");
        $mensagemFormatada = "[$severidade][$dataHoje]: {$mensagem}";

        $logWriter->escreve($mensagemFormatada);
    }

    abstract public function criarLogWriter(): LogWriter;
}
?>