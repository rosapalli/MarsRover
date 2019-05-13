<?php
use Classes\Factory;
spl_autoload_register(function ($class) {
    include_once "$class.php";
});

$file = file('input.txt');
$factory = New Factory();

foreach ($file as $input) {
    if (preg_match("/[0-9]\s[0-9]\s[A-Z]/", $input)) {
        if (isset($rover)) {
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
        if (isset($commands)) {
            $commands2 = $factory->createCommands($input);
        } else {
            $commands = $factory->createCommands($input);
        }
    }
}

if (isset($rover)) {
    $factory->createMovement($rover, $plateau, $commands);
    echo $rover->getRover() . PHP_EOL;
}
if (isset($rover2)) {
    $factory->createMovement($rover2, $plateau, $commands2);
    echo $rover2->getRover() . PHP_EOL;
}


