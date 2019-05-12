<?php
namespace MarsRover;

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

    public function createMovement($rover, $plateau, $input) {
        $commands = str_split($input);
        foreach ($commands as $command) 
        {
            if ($command === "L") {
                $movement = new Movement();
                $movement->turnLeft($rover);
            } else if ($command === "R") {
                $movement = new Movement();
                $movement->turnRight($rover);
            } else {
                $movement = new Movement();
                $movement->moveForward($rover, $plateau);
            }
        }
    }
}
