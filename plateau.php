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
        $this->x = $coordinates[0];
        $this->y = $coordinates[1];
    }

    public function getPlateau() {
        return [$this->x, $this->y];
    }
}