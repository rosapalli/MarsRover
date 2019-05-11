<?php

spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$file = file('input.txt');

foreach ($file as $input) {
    if (preg_match("/[0-9]\s[0-9]\s[A-Z]/", $input)) {
        $factory = New Factory();
        if (isset($rover)) {
            $rover2 = $factory->createRover($input);
        } else if (isset($rover2)) {
            $rover3 = $factory->createRover($input);
        } else {
            $rover = $factory->createRover($input);
        }
    } else if (preg_match("/[0-9]\s[0-9]/", $input)) {
        $factory = New Factory();
        if (isset($plateau)) {
            echo "Plateau dimensions have already been defined.";
        } else {
            $plateau = $factory->createPlateau($input);
        }
    }
}

//
//$plateau = $factory->createPlateau("5 5");
//$rover = $factory->createRover("1 2 N");
$createMovement = $factory->createMovement($rover, $plateau, "LMLMLMLMM");

//$rover2 = $factory->createRover("3 3 E");
//
//$factory->createMovement($rover2, $plateau, "MMRMMRMRRM");

    echo $rover->getRover();
    echo $rover2->getRover();
    