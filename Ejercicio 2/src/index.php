<?php
require_once 'Windows10.php';
require_once 'Windows7.php';
require_once 'Adaptador.php';

use Src\Windows7;
use Src\Adaptador;

// Crear un archivo de Windows 7
$windows7File = new Windows7File();

// Adaptar el archivo para Windows 10
$adapter = new Adaptador($windows7File);

// Abrir el archivo en Windows 10
echo $adapter->open() . "\n";
?>