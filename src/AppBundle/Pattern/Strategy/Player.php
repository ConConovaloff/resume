<?php


namespace AppBundle\Pattern\Strategy;


class Player
{
    /**
     * @var WeaponStrategy
     */
    private $weapon;

    public function setWeapon(WeaponStrategy $weaponStrategy)
    {
        $this->weapon = $weaponStrategy;
    }

    public function attack($string)
    {
        return $this->weapon->attack($string);
    }
}