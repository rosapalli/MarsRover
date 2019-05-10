<?php

class Rover {

    private $xPosition;
    private $yPosition;
    private $direction;

    public function __construct($xPosition, $yPosition, $direction) {
        $this->xPosition = $xPosition;
        $this->yPosition = $yPosition;
        $this->direction = $direction;
    }

    public function getRover() {
        return "$this->xPosition $this->yPosition $this->direction";
    }

    public function setRover($xPosition, $yPosition, $direction) {
        $this->xPosition = $xPosition;
        $this->yPosition = $yPosition;
        $this->direction = $direction;
    }

}
