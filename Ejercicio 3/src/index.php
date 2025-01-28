<?php
require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Mage.php';
require_once 'WeaponDecorator.php';
require_once 'SwordDecorator.php';
require_once 'StaffDecorator.php';

use Src\Warrior;
use Src\Mage;
use Src\SwordDecorator;
use Src\StaffDecorator;

// Crear un guerrero y añadirle una espada
$warrior = new Warrior();
$warriorWithSword = new SwordDecorator($warrior);

// Crear un mago y añadirle un bastón mágico
$mage = new Mage();
$mageWithStaff = new StaffDecorator($mage);

// Mostrar los ataques
echo $warriorWithSword->attack() . "\n";
echo $mageWithStaff->attack() . "\n";
?>