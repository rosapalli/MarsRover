<?php

class Movement {
   private $input;
   
   public function construct_($input) {
    $this->input = $input;
   }
   
   public function turnLeft() {}
   
   public function turnRight() {}
   
   public function moveForward() {} 
   //the position of other rovers
   //if the rover is facing north, move forward is y+1
   //if the rover is facing east, move forward is X+1
   //if the rover is facing south, move forward is y-1
   //if the rover is facing west, move forward is y+1
   //x and y can never be larger than the dimensions of the plateau
   //
}
