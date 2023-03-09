<?php

use DesignPattern\Log\FileLogManager;
use DesignPattern\Log\StdoutLogManager;

require_once "./vendor/autoload.php";

$logManager = new FileLogManager(__DIR__ . "/log.txt");

$logManager->log("info", "Testando Log Manager");
?>