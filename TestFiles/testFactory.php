<?php
namespace Test;
require_once'..\Classes\factory.php';
require_once '..\Classes\rover.php';
require_once '..\Classes\plateau.php';
require_once '..\Classes\movement.php';
use Classes\Factory;
use Classes\Rover;
use Classes\Plateau;
use Classes\Movement;

class FactoryTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        $this->Factory = new Factory;
    }

    protected function tearDown() {
        unset($this->Factory);
    }
    
    public function testCreateCommands() {
        $input = "LMLMLMLMM";
        $expected = ["L", "M", "L", "M", "L", "M", "L", "M", "M"];
        $result = $this->Factory->createCommands($input);
        $this->assertEquals($expected,$result);
    }

    /**
     * @dataProvider provideCreateMovement
     */
    public function testCreateMovement($commands, $rover, $expected) {
        $this->Rover = new Rover($rover);
        $this->Plateau = new Plateau("5 5");
        $this->Factory->createMovement($this->Rover, $this->Plateau, $commands);
        $result = $this->Rover->getRover();
        $this->assertEquals($expected, $result);
    }

    public function provideCreateMovement() {
        return [
            [["L", "M", "L", "M", "L", "M", "L", "M", "M"], "1 2 N", "1 3 N"],
            [["M", "M", "R", "M", "M", "R", "M", "R", "R", "M"], "3 3 E", "5 1 E"]
        ];
    }

}
