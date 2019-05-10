<?php
spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$factory = new Factory(); 

$plateau = $factory->createPlateau("5 5");
$rover = $factory->createRover("1 2 N");
$rover2 = $factory->createRover("3 3 E");

$factory->createMovement($rover, $plateau, "LMLMLMLMM"); 
$factory->createMovement($rover2, $plateau, "MMRMMRMRRM");

echo $rover->getRover();
echo PHP_EOL;
echo $rover2->getRover();