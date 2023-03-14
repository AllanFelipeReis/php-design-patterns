<?php

use DesignPattern\PdoConnection;

require_once 'vendor/autoload.php';

$pdo = PdoConnection::getInstance("sqlite::memory:");

$pdo2 = PdoConnection::getInstance("sqlite::memory:");

var_dump($pdo, $pdo2);

?>