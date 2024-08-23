<?php

class PeliculaController {
    private $titulo;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $year;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $edad;

    public function __construct($datos){
        $this->titulo = $datos['titulo'];
        $this->actores = $datos['actores'];
        $this->director = $datos['director'];
        $this->guion = $datos['guion'];
        $this->produccion = $datos['produccion'];
        $this->year = $datos['year'];
        $this->nacionalidad = $datos['nacionalidad'];
        $this->genero = $datos['genero'];
        $this->duracion = $datos['duracion'];
        $this->edad = $datos['edad'];
    }

    public function __toString(){
        $titulo = $this->getTitulo();
        $actores = $this->getActores();
        $director = $this->getDirector();
        $guion = $this->getGuion();
        $produccion = $this->getProduccion();
        $year = $this->getYear();
        $nacionalidad = $this->getNacionalidad();
        $genero = $this->getGenero();
        $duracion = $this->getDuracion();
        $edad = $this->getEdad();
        if ($edad === "atp") {
            $edad = "Apto para todo público";
        } else if ($edad === "+13") {
            $edad = "Mayores de 13 años";
        } else {
            $edad = "Mayores de 18 años";
        }
        return "            
            <p><strong>Título: </strong> $titulo</p>
            <p><strong>Actores: </strong> $actores</p>
            <p><strong>Director: </strong> $director</p>
            <p><strong>Guión: </strong> $guion</p>
            <p><strong>Producción: </strong> $produccion</p>
            <p><strong>Año: </strong> $year</p>
            <p><strong>Nacionalidad: </strong> $nacionalidad</p>
            <p><strong>Género: </strong> $genero</p>
            <p><strong>Duración: </strong> $duracion minutos</p>
            <p><strong>Restricción de edad: </strong> $edad</p>";
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of actores
     */
    public function getActores()
    {
        return $this->actores;
    }

    /**
     * Set the value of actores
     */
    public function setActores($actores): self
    {
        $this->actores = $actores;

        return $this;
    }

    /**
     * Get the value of director
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     */
    public function setDirector($director): self
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get the value of guion
     */
    public function getGuion()
    {
        return $this->guion;
    }

    /**
     * Set the value of guion
     */
    public function setGuion($guion): self
    {
        $this->guion = $guion;

        return $this;
    }

    /**
     * Get the value of produccion
     */
    public function getProduccion()
    {
        return $this->produccion;
    }

    /**
     * Set the value of produccion
     */
    public function setProduccion($produccion): self
    {
        $this->produccion = $produccion;

        return $this;
    }

    /**
     * Get the value of year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of nacionalidad
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set the value of nacionalidad
     */
    public function setNacionalidad($nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of duracion
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     */
    public function setDuracion($duracion): self
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad($edad): self
    {
        $this->edad = $edad;

        return $this;
    }
}