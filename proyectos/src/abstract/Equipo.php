<?php
namespace App\abstract;

abstract class Equipo{

    public function __construct(public readonly string $codigo, public readonly strigng $nombre){

    }

    abstract public function diasMaximoPrestamo():int{
        
    }
}

?>