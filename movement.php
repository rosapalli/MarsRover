<?php
namespace MarsRover;

class Movement {

    public function turnLeft($rover) {
        $getRover = $rover->getRover();
        $coordinates= explode(" ", $getRover);

        if(preg_match('(N)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] W");
        }
        if(preg_match('(E)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] N");
        }
        if(preg_match('(S)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] E");
        }
        if(preg_match('(W)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] S");
        }
    }

    public function turnRight($rover) {
        $getRover = $rover->getRover();
        $coordinates = explode(" ", $getRover);

        if(preg_match('(N)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] E");
        }
        if(preg_match('(E)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] S");
        }
        if(preg_match('(S)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] W");
        }
        if(preg_match('(W)', $getRover) === 1) {
            return $rover->setRover("$coordinates[0] $coordinates[1] N");
        }
    }

    public function moveForward($rover, $plateau) {
        $getRover = $rover->getRover();
        $coordinates = explode(" ", $getRover);
        $x = $coordinates[0];
        $y = $coordinates[1];    
        $getPlateau = $plateau->getPlateau();
        
        if (preg_match('(N)', $getRover) === 1 && (0 <= $x && $x <= $getPlateau[0]) && (0 <= $y && $y <= $getPlateau[1]-1)) {
            $y = ++$y;
            return $rover->setRover("$x $y N");             
        }    
        if (preg_match('(E)', $getRover) === 1 && (0 <= $x && $x <= $getPlateau[0]-1) && (0 <= $y && $y <= $getPlateau[1])) {
            $x = ++$x;
            return $rover->setRover("$x $y E");
        }
        if (preg_match('(S)', $getRover) === 1 && (0 <= $x && $x <= $getPlateau[0]) && (1 <= $y && $y <= $getPlateau[1])) {
            $y = --$y;
            return $rover->setRover("$x $y S");
        }
        if (preg_match('(W)', $getRover) === 1 && (1 <= $x && $x <= $getPlateau[0]) && (0 <= $y && $y <= $getPlateau[1])) {
            $x = --$x;
            return $rover->setRover("$x $y W");
        }
    }
}
