<?php
namespace Src;

class SwordDecorator extends WeaponDecorator {
    public function attack() {
        return $this->character->attack() . " + Espada afilada!";
    }
}
?>