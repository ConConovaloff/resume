<?php

namespace AppBundle\Pattern\Strategy;

interface WeaponStrategy
{
    public function attack($mix);
}