<?php

class UsuarioController {
    private $nombreUsuario;
    private $password;

    public function __construct($datos){
        $this->nombreUsuario = $datos['usuario'];
        $this->password = $datos['password'];
    }

    /**
     * Get the value of nombreUsuario
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     */
    public function setNombreUsuario($nombreUsuario): self
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    public function verificarUsuario(){
        $rta = false;
        $usuario = new Usuario();
        $usuarios = $usuario->getUsuarios();
        $usuarioEncontrado = null;
        $i = 0;
        while (!$usuarioEncontrado && count($usuarios) > $i) {
            if ($usuarios[$i]['usuario'] === $this->getNombreUsuario() && $usuarios[$i]['clave'] === $this->getPassword()) {
                $rta = true;
            }
            $i++;
        }
        return $rta;
    }
}