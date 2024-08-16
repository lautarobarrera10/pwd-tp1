<?php

class Mensaje {
    private $mensaje;

    public function __construct($mensaje = ""){
        $this->mensaje = $mensaje;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

    public function setMensaje($mensaje){
        $this->mensaje = $mensaje;
    }

    public function concatenarMensaje($nuevoString) {
        $mensaje = $this->getMensaje();
        $this->setMensaje($mensaje . " " . $nuevoString);
    }

    public function armarMensajeDePresentacion($info){
        extract($info);
    
        if (isset($nombre, $apellido, $edad, $direccion)) {
            $this->setMensaje("Hola, mi nombre es $nombre $apellido, tengo $edad años y vivo en $direccion.");
        }
    }

    public function concatenarMayoriaEdad($edad){
        if ($edad >= 18) {
            $this->concatenarMensaje("Soy mayor de edad.");
        } else {
            $this->concatenarMensaje("Soy menor de edad.");
        }
    }

    public function concatenarNivelEstudios($nivel){
        if ($nivel == "ninguno"){
            $this->concatenarMensaje("No poseo estudios.");
        }
        if ($nivel == "primario"){
            $this->concatenarMensaje("Poseo estudios primarios.");
        }
        if ($nivel == "secundario"){
            $this->concatenarMensaje("Poseo estudios secundarios.");
        }
    }

    public function concatenarSexo($sexo){
        if ($sexo == "masculino"){
            $this->concatenarMensaje("Mi sexo es masculino.");
        }
        if ($sexo == "femenino"){
            $this->concatenarMensaje("Mi sexo es femenino.");
        }
        if ($sexo == "otro"){
            $this->concatenarMensaje("Mi sexo prefiero no decirlo.");
        }
    }

    public function concatenarDeportes($info){
        $deportes = $this->obtenerDeportes($info);

        $deporteMensaje = "Practico ";

        for ($i=0; $i < count($deportes); $i++) {
            if (count($deportes) - 2 === $i) {
                $deporteMensaje .= "$deportes[$i] y ";
            } else if (count($deportes) - 1 === $i) {
                $deporteMensaje .= "$deportes[$i].";
            } else {
                $deporteMensaje .= "$deportes[$i], ";
            }
        }

        $this->concatenarMensaje($deporteMensaje);
    }

    public function obtenerDeportes($info){
        $deportes = [];

        foreach ($info as $key => $value) {
            if ($key == "futbol" || 
                $key == "basquet" || 
                $key == "voley" || 
                $key == "tenis"
            ) {
                array_push($deportes, $key);
            }
        }

        return $deportes;
    }
}