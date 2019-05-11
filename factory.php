<?php

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
        $coordinates = explode(" ", $input);
        return new Plateau($coordinates[0], $coordinates[1]);
    }

    public function createRover($input) {
        $coordinates = explode(" ", $input);
        return new Rover($coordinates[0], $coordinates[1], $coordinates[2]);
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
