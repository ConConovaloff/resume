<?php

namespace AppBundle\Pattern\Strategy;


class WeaponSwordStrategy implements WeaponStrategy
{

    public function attack($mix)
    {
        return " атакует мечом: " . $mix;
    }
}