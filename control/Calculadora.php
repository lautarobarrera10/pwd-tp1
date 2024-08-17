<?php

class Calculadora {
    private $operando1;
    private $operando2;
    private $operacion;

    public function __construct($operando1, $operando2){
        $this->operando1 = $operando1;
        $this->operando2 = $operando2;
    }

    public function getOperacion(){
        return $this->operacion;
    }

    public function setOperacion($operacion){
        $this->operacion = $operacion;
    }

    public function getOperando1(){
        return $this->operando1;
    }

    public function getOperando2(){
        return $this->operando2;
    }

    public function calcular(){
        $resultado = null;
        if ($this->getOperacion() === "sumar"){
            $resultado = $this->getOperando1() + $this->getOperando2();
        }
        if ($this->getOperacion() === "restar"){
            $resultado = $this->getOperando1() - $this->getOperando2();
        }
        if ($this->getOperacion() === "multiplicar"){
            $resultado = $this->getOperando1() * $this->getOperando2();
        }
        return $resultado;
    }
}