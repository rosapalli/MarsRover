<?php
namespace Classes;

class Factory {

    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Factory();
        }
        return self::$instance;
    }

    public function createPlateau($input) {
        return new Plateau($input);
    }

    public function createRover($input) {
            return new Rover($input);
    }

    public function createCommands($input) {
            return str_split($input);
    }

    public function createMovement($rover, $plateau, $commands) {
        foreach ($commands as $command) {
            if ($command === "L") {
                $movement = new Movement();
                $movement->turnLeft($rover);
            } else if ($command === "R") {
                $movement = new Movement();
                $movement->turnRight($rover);
            } else if($command === "M") {
                $movement = new Movement();
                $movement->moveForward($rover, $plateau);
            }
        }
    }
}
