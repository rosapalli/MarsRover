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
    
    /**
     * @dataProvider provideCreateMovement
     */
    public function testCreateMovement($input, $rover, $expected) {
        $this->Rover = new Rover($rover);
        $this->Plateau = new Plateau("5 5");
        $this->Factory->createMovement($this->Rover, $this->Plateau, $input);
        $result = $this->Rover->getRover();
        $this->assertEquals($expected, $result);
    }

    public function provideCreateMovement() {
        return [
            ["LMLMLMLMM", "1 2 N", "1 3 N"],
            ["MMRMMRMRRM","3 3 E", "5 1 E"]
        ];
    }    
}
