<?php
require_once 'Personaje.php';

class Esqueleto implements Personaje {
    public function atacar() {
        return "El Esqueleto ataca con un hueso!";
    }

    public function obtenerVelocidad() {
        return "Velocidad del Esqueleto: 5";
    }
}
?>