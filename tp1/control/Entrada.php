<?php

class Entrada {
    private $edad;
    private $estudiante;
    private $precio;

    public function __construct($datos){
        $this->edad = $datos['edad'];
        $this->estudiante = $datos['estudiante'] == "si" ? true : false;
        $this->precio = $this->calcularPrecio();
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getEstudiante(){
        return $this->estudiante;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function calcularPrecio(){
        $precio = 300;
        if ($this->getEdad() < 12 && $this->getEstudiante()){
            $precio = 160;
        } else if ($this->getEstudiante()){
            $precio = 180;
        }
        return $precio;
    }
}