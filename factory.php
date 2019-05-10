<?php

class Factory {
    /* read input text file line by line
     * if the input line is two integers = new Plateau
     * if the input line is two integers and one letter = new Rover
     * if the input line is anything else = new Movement
     */

    public function createPlateau($input) {
        $coordinates[] = explode(" ", $input);
        return new Plateau($coordinates[0], $coordinates[1]);
    }

    public function createRover($input) {
        $coordinates[] = explode(" ", $input);
        return new Rover($coordinates[0], $coordinates[1], $coordinates[2]);
    }

    public function createMovement($rover, $input) {
        //the movement command is passed as a string
        //the movement command string is transformed into an array
        //for each element of the command array call the right method depending if 
        //it's a L, R or M
    }

}
