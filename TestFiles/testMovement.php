<?php
namespace Test;
require_once '..\Classes\movement.php';
require_once '..\Classes\rover.php';
require_once '..\Classes\plateau.php';
use Classes\Movement;
use Classes\Rover;
use Classes\Plateau;

class MovementTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        $this->Movement = new Movement;
    }

    protected function tearDown() {
        unset($this->Movement);
    }

    /**
     * @dataProvider provideTurnLeft
     */
    public function testTurnLeft($input, $expected) {
        $this->Rover = new Rover($input);
        $this->Movement->turnLeft($this->Rover);
        $result = $this->Rover->getRover();
        $this->assertEquals($expected, $result);
    }

    public function provideTurnLeft() {
        return [
            ["5 5 N", "5 5 W"],
            ["4 4 S", "4 4 E"],
            ["4 2 W", "4 2 S"],
        ];
    }

    /**
     * @dataProvider provideTurnRight
     */
    public function testTurnRight($input, $expected) {
        $this->Rover = new Rover($input);
        $this->Movement->turnRight($this->Rover);
        $result = $this->Rover->getRover();
        $this->assertEquals($expected, $result);
    }

    public function provideTurnRight() {
        return [
            ["5 5 N", "5 5 E"],
            ["4 4 S", "4 4 W"],
            ["4 2 W", "4 2 N"],
        ];
    }

    /**
     * @dataProvider provideMoveForward
     */
    public function testMoveForward($input, $expected) {
        $this->Rover = new Rover($input);
        $this->Plateau = new Plateau("5 5");
        $this->Movement->moveForward($this->Rover, $this->Plateau);
        $result = $this->Rover->getRover();
        $this->assertEquals($expected, $result);
    }

    public function provideMoveForward() {
        return [
            ["1 2 W", "0 2 W"],
            ["0 2 S", "0 1 S"],
            ["0 1 E", "1 1 E"],
            ["1 1 N", "1 2 N"],
            ["1 2 N", "1 3 N"],
        ];
    }

}
