<?php

spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$file = file('input.txt');
$factory = New Factory();

//ABILITY TO WRITE INTO THE FILE HERE

foreach ($file as $input) {
    if (preg_match("/[0-9]\s[0-9]\s[A-Z]/", $input)) {
        if (isset($rover2)) {
            $rover3 = $factory->createRover($input);
        } else if (isset($rover)) {
            $rover2 = $factory->createRover($input);
        } else {
            $rover = $factory->createRover($input);
        }
    } else if (preg_match("/[0-9]\s[0-9]/", $input)) {
        if (isset($plateau)) {
            throw new \BadMethodCallException('Plateau dimensions already defined');
        }
        $plateau = $factory->createPlateau($input);
    } else {
        if (isset($commands2)) {
            $commands3 = $factory->createCommands($input);
        } else if (isset($commands)) {
            $commands2 = $factory->createCommands($input);
        } else {
            $commands = $factory->createCommands($input);
        }
    }
}

$factory->createMovement($rover, $plateau, $commands);
$factory->createMovement($rover2, $plateau, $commands2);
$factory->createMovement($rover3, $plateau,$commands3);

//CREATE NEW FILE FOR OUTPUT AND WRITE THE FOLLOWING
echo $rover->getRover() . PHP_EOL . $rover2->getRover() . PHP_EOL . $rover3->getRover();
