<?php

namespace DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWriter(): LogWriter
    {
        return new StdoutLogWriter();
    }
}

?>