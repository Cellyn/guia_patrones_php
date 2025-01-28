<?php
require_once 'OutputStrategy.php';
require_once 'ConsoleOutput.php';
require_once 'JsonOutput.php';
require_once 'TxtOutput.php';
require_once 'MessageDisplay.php';

use Src\ConsoleOutput;
use Src\JsonOutput;
use Src\TxtOutput;
use Src\MessageDisplay;

// Mensaje a mostrar
$message = "Hola, mundo!";

// Estrategias de salida
$consoleOutput = new ConsoleOutput();
$jsonOutput = new JsonOutput();
$txtOutput = new TxtOutput();

// Mostrar mensaje usando diferentes estrategias
$display = new MessageDisplay($consoleOutput);
echo $display->display($message) . "\n";

$display = new MessageDisplay($jsonOutput);
echo $display->display($message) . "\n";

$display = new MessageDisplay($txtOutput);
echo $display->display($message) . "\n";
?>