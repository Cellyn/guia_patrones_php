<?php

namespace Src;

abstract class WeaponDecorator implements Character {
    protected $character;

    public function __construct(Character $character) {
        $this->character = $character;
    }

    abstract public function attack();
}
?>