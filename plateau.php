<?php

namespace MarsRover;

class Plateau {

    private $x;
    private $y;

    public function __construct($input) {
        $this->setPlateau($input);
    }

    public function setPlateau($input) {
        $coordinates = explode(" ", $input);
        if ($coordinates[0] <= 0 || $coordinates[1] <= 0) {
            throw new \BadMethodCallException('Plateau coordinates must be more than 1x1 or more');
        }
        $this->x = $coordinates[0];
        $this->y = $coordinates[1];
    }

    public function getPlateau() {
        return [$this->x, $this->y];
    }

}
