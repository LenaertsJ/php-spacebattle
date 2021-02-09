<?php


class Ship
{
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;

    public function getNameAndSpecs($short)
    {
        if($short) {
            return sprintf('%s : %s/%s/%s',
                $this->name,
                $this->jediFactor,
                $this->weaponPower,
                $this->strength
            );
        } else {
            return sprintf('%s (w:%s, j:%s, s:%s)',
                $this->name,
                $this->jediFactor,
                $this->weaponPower,
                $this->strength
            );
        }
    }

    public function getName(){
        return $this->name;
    }

    public function sayHello(){
        echo "Hello ".$this->name;
    }

    public function strengthMeasure($givenShip) {
        return $givenShip->strength > $this->strength;
    }

}