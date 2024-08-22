<?php

class Usuario {
    private $usuarios = [
        [
            "usuario" => "lautaro",
            "clave" => "lautaro123"
        ],
        [
            "usuario" => "gaby",
            "clave" => "gaby123"
        ],
    ];

    public function getUsuarios(){
        return $this->usuarios;
    }
}