<?php
spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$plateau = new Plateau (5,5);
$rover = new Rover(3, 3, "E");

$movement = new Movement();

echo $rover->getRover();echo PHP_EOL;

$movement->moveForward($rover, $plateau);
echo $rover->getRover();echo PHP_EOL;

$movement->moveForward($rover, $plateau);
echo $rover->getRover();echo PHP_EOL;

$movement->turnLeft($rover);
echo $rover->getRover() . PHP_EOL;

$movement->moveForward($rover, $plateau);
echo $rover->getRover();echo PHP_EOL;

$movement->moveForward($rover, $plateau);
echo $rover->getRover();echo PHP_EOL;

$movement->moveForward($rover, $plateau);
echo $rover->getRover();echo PHP_EOL;



$movement->moveForward($rover, $plateau);
echo $rover->getRover();echo PHP_EOL;
