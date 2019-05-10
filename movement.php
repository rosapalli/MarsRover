<?php

class Movement {

    public function turnLeft($rover) {
        $getRover = $rover->getRover();
        $coordinates= explode(" ", $getRover);

        if ($coordinates[2] == "N") {
            return $rover->setRover($coordinates[0], $coordinates[1], "W");
        }
        if ($coordinates[2] == "E") {
            return $rover->setRover($coordinates[0], $coordinates[1], "N");
        }
        if ($coordinates[2] == "S") {
            return $rover->setRover($coordinates[0], $coordinates[1], "E");
        }
        if ($coordinates[2] == "W") {
            return $rover->setRover($coordinates[0], $coordinates[1], "S");
        }
    }

    public function turnRight($rover) {
        $getRover = $rover->getRover();
        $coordinates = explode(" ", $getRover);

        if ($coordinates[2] == "N") {
            return $rover->setRover($coordinates[0], $coordinates[1], "E");
        }
        if ($coordinates[2] == "E") {
            return $rover->setRover($coordinates[0], $coordinates[1], "S");
        }
        if ($coordinates[2] == "S") {
            return $rover->setRover($coordinates[0], $coordinates[1], "W");
        }
        if ($coordinates[2] == "W") {
            return $rover->setRover($coordinates[0], $coordinates[1], "N");
        }
    }

    public function moveForward($rover, $plateau) {
        $getRover = $rover->getRover();
        $coordinates = explode(" ", $getRover);
        $x = $coordinates[0];
        $y = $coordinates[1];
        
        $getPlateau = $plateau->getPlateau();
        
        if ($coordinates[2] == "N" && (0 <= $x && $x <= $getPlateau[0]) && (0 <= $y && $y <= $getPlateau[1]-1)) {
            return $rover->setRover($x, ++$y, "N");             
        }    
        if ($coordinates[2] == "E" && (0 <= $x && $x <= $getPlateau[0]-1) && (0 <= $y && $y <= $getPlateau[1])) {
            return $rover->setRover(++$x, $y, "E");
        }
        if ($coordinates[2] == "S" && (0 <= $x && $x <= $getPlateau[0]) && (1 <= $y && $y <= $getPlateau[1])) {
            return $rover->setRover($x, --$y, "S");
        }
        if ($coordinates[2] == "W" && (1 <= $x && $x <= $getPlateau[0]) && (0 <= $y && $y <= $getPlateau[1])) {
            return $rover->setRover(--$x, $y, "W");
        }
    }
}
