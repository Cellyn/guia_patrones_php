<?php

require_once __DIR__ .  '/factory/PersonajeFactory.php';
require_once __DIR__ .  '/personajes/Esqueleto.php';
require_once __DIR__ .  '/personajes/Personaje.php';
require_once __DIR__ .  '/personajes/Zombi.php';


try {
    $personajeFacil = PersonajeFactory::crearPersonaje('facil');
    echo $personajeFacil->atacar() . "\n"; // El Esqueleto ataca con un hueso!
    echo $personajeFacil->obtenerVelocidad() . "\n"; // Velocidad del Esqueleto: 5

    $personajeDificil = PersonajeFactory::crearPersonaje('dificil');
    echo $personajeDificil->atacar() . "\n"; // El Zombi ataca con sus garras!
    echo $personajeDificil->obtenerVelocidad() . "\n"; // Velocidad del Zombi: 3
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>