<?php
namespace Src;

class StaffDecorator extends WeaponDecorator {
    public function attack() {
        return $this->character->attack() . " + Bastón mágico!";
    }
}
?>