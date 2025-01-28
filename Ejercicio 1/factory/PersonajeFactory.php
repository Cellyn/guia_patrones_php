<?php

class PersonajeFactory {
    public static function crearPersonaje($nivel) {
        switch ($nivel) {
            case 'facil':
                return new Esqueleto();
            case 'dificil':
                return new Zombi();
            default:
                throw new Exception("Nivel no válido");
        }
    }
}
?>
