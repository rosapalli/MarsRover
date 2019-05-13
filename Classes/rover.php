<?php
namespace Classes;

class Rover {

    private $xPosition;
    private $yPosition;
    private $direction;

    public function __construct($input) {
        $this->setRover($input);
    }

    public function getRover() {
        return "$this->xPosition $this->yPosition $this->direction";
    }

    public function setRover($input) {
        $coordinates = explode(" ", $input);
        if (preg_match('(N|S|W|E)', $input) === 0) {
            throw new \BadMethodCallException('ROVER direction must be North, South, East, or West');
        }
        $this->xPosition = $coordinates[0];
        $this->yPosition = $coordinates[1];
        $this->direction = $coordinates[2];
    }

}
