<?php

class Numero {
    public function devolverSigno($info){
        $mensaje = "incorrecto";
        var_dump($info['number']);
        if ($info['number'] === "0"){
            $mensaje = "cero";
        } else if ($info['number'] > 0) {
            $mensaje = "positivo";
        } else {
            $mensaje = "negativo";
        }

        return $mensaje;
    }
}