<?php

class Rover {

    private $xPosition;
    private $yPosition;
    private $direction;

    public function construct_($xPosition, $yPosition, $direction) {
        $this->xPosition = $xPosition;
        $this->yPosition = $yPosition;
        $this->direction = $direction;
    }

    public function newRover($xPosition, $yPosition, $direction) {
        return new Rover($xPosition, $yPosition, $direction);
    }

    public function getCoordinates() {
        return "$this->xPosition $this->yPosition $this->direction";
    }

}
