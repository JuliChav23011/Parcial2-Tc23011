<?php

namespace App\models;
use App\abstract\Equipo;

class Laptop extends Equipo{
    public function diasMaximoPrestamo(): int{
        return 3;
    }
}

?>