<?php

class Plateau {

    private $x;
    private $y;

    public function construct_($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPlateauDimensions() {
        return [$this->x, $this->y];
    }

   public function setPlateau($input) {
       $coordinates[] = explode(" ", $input);
       $plateau = new Plateau($coordinates[0], $coordinates[1]);
       return $plateau;
   }
}

