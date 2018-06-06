<?php

namespace AppBundle\Pattern\Strategy;


class WeaponBowStrategy implements WeaponStrategy
{

    public function attack($mix)
    {
        return " атакует дальней атакой из лука: " . $mix;
    }
}