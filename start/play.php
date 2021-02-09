<?php

require __DIR__.'/lib/Ship.php';

$myShip = new Ship;
$myShip->name = "TIE Fighter";
$myShip->strength = 15;

$otherShip = new Ship;
$otherShip->strength = 10;

/**
 * @param Ship $someShip
 */

function printShipDetails($someShip) {
    echo 'Ship Name: ' .$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
    echo '<hr/>';
}

printShipDetails($myShip);

if($myShip->strengthMeasure($otherShip));
