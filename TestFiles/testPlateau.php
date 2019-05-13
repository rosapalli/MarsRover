<?php
namespace Test;
require_once'..\Classes\plateau.php';
use Classes\Plateau;

class PlateauTest extends \PHPUnit_Framework_TestCase {

    protected function tearDown() {
        unset($this->Plateau);
    }

    public function testSetPlateau() {
        $input = "5 5";
        $newInput = "2 2";
        $this->Plateau = new Plateau($input);
        $this->Plateau->setPlateau($newInput);
        $output = $this->Plateau->getPlateau();
        $this->assertEquals([2, 2], $output, "The dimensions of the plateau should be 2x2");
    }

    public function testSetPlateauException() {
        $input = "2 2";
        $this->Plateau = new Plateau($input);
        $this->setExpectedException('BadMethodCallException');
        $newInput = "0 2";
        $this->Plateau->setPlateau($newInput);
    }

    public function testGetPlateau() {
        $input = "5 5";
        $this->Plateau = new Plateau($input);
        $output = $this->Plateau->getPlateau();
        $this->assertEquals([5, 5], $output, "The dimensions of the plateau should be 5x5");
    }

    /**
     * @dataProvider provideConstruct
     */
    public function test__construct($input, $expected) {
        $this->Plateau = new Plateau($input);
        $output = $this->Plateau->getPlateau();
        $this->assertEquals($expected, $output);
    }

    public function provideConstruct() {
        return [
            ["5 5", [5, 5]],
            ["4 4", [4, 4]],
            ["6 10", [6, 10]],
        ];
    }

}
