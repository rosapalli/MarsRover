<?php

namespace MarsRover\Test;

require_once'..\factory.php';
require_once '..\rover.php';
require_once '..\plateau.php';
require_once '..\movement.php';

use MarsRover\Factory;
use MarsRover\Rover;
use MarsRover\Plateau;
use MarsRover\Movement;

class FactoryTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        $this->Factory = new Factory;
    }

    protected function tearDown() {
        unset($this->Factory);
    }

    //THIS TEST IS CURRENTLY FAILING
    public function testCreatePlateauException() {
        $input = "5 5";
        $newInput = "2 2";
        $plateau = $this->Factory->createPlateau($input);
        $this->Factory->createPlateau($newInput);
        $this->setExpectedException('BadMethodCallException');
    }
    
    public function testMultipleRovers() {
        //check if the factory creates rover2 if rover already exists
    }

    /**
     * @dataProvider provideCreateMovement
     */
    public function testCreateMovement($input, $rover, $expected) {
        //THIS METHOD HAS BEEN CHANGED, TEST NEEDS TO BE UPDATED TO MAKE SURE IT STILL WORKS AS EXPECTED
        $this->Rover = new Rover($rover);
        $this->Plateau = new Plateau("5 5");
        $this->Factory->createMovement($this->Rover, $this->Plateau, $input);
        $result = $this->Rover->getRover();
        $this->assertEquals($expected, $result);
    }

    public function provideCreateMovement() {
        return [
            ["LMLMLMLMM", "1 2 N", "1 3 N"],
            ["MMRMMRMRRM", "3 3 E", "5 1 E"]
        ];
    }

}
