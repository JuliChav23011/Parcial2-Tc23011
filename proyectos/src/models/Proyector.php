<?php
namespace App\models;
use App\abstract\Equipo;

class Proyector extends Equipo{
    public function diasMaximoPrestamo(): int{
        return 1;
    }
}

?>