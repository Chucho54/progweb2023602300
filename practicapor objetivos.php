<?php


class Alumno {
    private $nombre;
    private $apellidos;
    private $parcial1;
    private $parcial2;
    private $parcial3;
    private $promedio;

    public function __construct($nombre, $apellidos, $parcial1, $parcial2, $parcial3) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->parcial1 = $parcial1;
        $this->parcial2 = $parcial2;
        $this->parcial3 = $parcial3;
        $this->promedio = round(($parcial1 + $parcial2 + $parcial3) / 3, 0);
    }
}

?>









