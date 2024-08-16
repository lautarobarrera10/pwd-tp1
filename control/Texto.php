<?php

class Texto {
    public function armarMensajeDePresentacion($info){
        extract($info);
        return "Hola, mi nombre es $nombre $apellido, tengo $edad años y vivo en $direccion.";
    }
}