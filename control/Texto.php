<?php

class Texto {
    public function armarMensajeDePresentacion($info){
        extract($info);
        return "Hola, mi nombre es $nombre $apellido, tengo $edad años y vivo en $direccion.";
    }

    public function armarMensajeDeMayorEdad($edad){
        $mensaje = "";
        if ($edad >= 18) {
            $mensaje = "Soy mayor de edad.";
        } else {
            $mensaje = "Soy menor de edad.";
        }
        return $mensaje;
    }
}