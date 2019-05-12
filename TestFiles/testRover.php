<?php
namespace MarsRover\Test;
require_once'..\rover.php';
use MarsRover\Rover;

class RoverTest extends \PHPUnit_Framework_TestCase {

    protected function tearDown() {
        unset($this->Rover);
    }

    public function testSetRover() {
        $input = '1 2 N';
        $newInput = '3 3 E';
        $this->Rover = new Rover($input);
        $this->Rover->setRover($newInput);
        $output = $this->Rover->getRover();
        $this->assertEquals('3 3 E', $output, 'The ROVER coordinates should be 3 3 E');
    }

    public function testRoverDirectionException() {
        $input = "1 2 N";
        $this->Rover = new Rover($input);
        $this->setExpectedException('BadMethodCallException');
        $newInput = "1 2 D";
        $this->Rover->setRover($newInput);
    }

    public function testGetRover() {
        $input = "1 2 N";
        $this->Rover = new Rover($input);
        $output = $this->Rover->getRover();
        $this->assertEquals("1 2 N", $output, "The ROVER coordinates should be 1 2 N");
    }

    /**
     * @dataProvider provideConstruct
     */
    public function test__construct($input, $expected) {
        $this->Rover = new Rover($input);
        $output = $this->Rover->getRover();
        $this->assertEquals($expected, $output);
    }

    public function provideConstruct() {
        return [
            ["5 5 N", "5 5 N"],
            ["4 4 S", "4 4 S"],
            ["4 2 W", "4 2 W"],
        ];
    }

}
