<?php

namespace Modelo;
use Modelo\Persona;
use Modelo\conector\BaseDatos;

class Auto {

    private $patente;
    private $marca;
    private $modelo;
    private $duenio;
    private $mensajeOperacion;

    public function __construct(){
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->duenio=new Persona();
        $this->mensajeOperacion ="";
    }

    public function cargar($patente, $marca, $modelo, $duenio){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDuenio($duenio);
    }

    public function getPatente(){
        return $this->patente;
    }

    public function setPatente($patente){
        $this->patente = $patente;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getDuenio(){
        return $this->duenio;
    }

    public function setDuenio($duenio){
        $this->duenio = $duenio;
    }

    public function getMensajeOperacion(){
        return $this->mensajeOperacion;
    }

    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function buscar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = ".$this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $duenio = new Persona();
                    $duenio->setNroDni($row['DniDuenio']);
                    $duenio->buscar();
                    $this->cargar($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                    $resp = true;              
                }
            }
        } else {
            $this->setMensajeOperacion("auto->listar: ".$base->getError());
        }
        return $resp;
    
        
    }

    public function insertar(){
        $resp = false;
        $base = new BaseDatos();
        if($this->getDuenio() != null){
            $sql="INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES ('".$this->getPatente()."','".$this->getMarca()."','".$this->getModelo()."','".$this->getDuenio()->getNroDni()."')";
            if ($base->Iniciar()) {
                if ($patente = $base->Ejecutar($sql)) {
                    $this->setPatente($patente);
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("auto->insertar: ".$base->getError());
                }
            } else {
                $this->setMensajeoperacion("auto->insertar: ".$base->getError());
            }
        }
        
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE auto SET Marca = '".$this->getMarca()."',Modelo='".$this->getModelo()."',
        DniDuenio='".$this->getDuenio()->getNroDni()."' WHERE Patente='". $this->getPatente()."'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->modificar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    $duenio = new Persona();
                    $duenio->setNroDni($row['DniDuenio']);
                    $obj->cargar($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            self::setMensajeOperacion("auto->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
}

?>