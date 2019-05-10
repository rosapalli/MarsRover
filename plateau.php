<?php

class Plateau {
    
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPlateau() {
        return [$this->x, $this->y];
    }
}

