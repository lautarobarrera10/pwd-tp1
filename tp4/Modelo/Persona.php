<?php 
class Persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;
   
    public function __construct(){
        
        $this->nroDni="";
        $this->apellido="";
        $this->nombre ="";
        $this->fechaNac="";
        $this->telefono="";
        $this->domicilio ="";
        $this->mensajeoperacion ="";
        
    }
    public function getNroDni(){
        return $this->nroDni;
        
    }
    public function setNroDni($valor){
        $this->nroDni = $valor;
        
    }
    
    public function getApellido(){
        return $this->apellido;
        
    }
    public function setApellido($valor){
        $this->apellido = $valor;
        
    }
    public function getNombre(){
        return $this->nombre;
        
    }
    public function setNombre($valor){
        $this->nombre = $valor;
        
    }
    
    public function getFechaNac(){
        return $this->fechaNac;
        
    }
    public function setFechaNac($valor){
        $this->fechaNac = $valor;
        
    }
    
    public function getTelefono(){
        return $this->telefono;
        
    }
    public function setTelefono($valor){
        $this->telefono = $valor;
        
    }
    public function getDomicilio(){
        return $this->domicilio;
        
    }
    public function setDomicilio($valor){
        $this->domicilio = $valor;
        
    }
    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
        
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
        
    }
    
    
    public function cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
        $this->setmensajeoperacion("");
    }
    
    public function insertar(){
        $respuesta = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona (nroDni, apellido, nombre, fechaNac, telefono, domicilio)
        VALUES ('" 
        . $this->getNroDni() . "', '" 
        . $this->getApellido() . "', '" 
        . $this->getNombre() . "', '" 
        . $this->getFechaNac() . "', '" 
        . $this->getTelefono() . "', '" 
        . $this->getDomicilio() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setNroDni($elid);
                $respuesta = true;
            } else {
                $this->setMensajeOperacion("Persona->insertar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->insertar: ".$base->getError());
        }
        return $respuesta;
    }

    public function modificar(){
        $resp = false;
        $base = new BaseDatos();

        $sql="UPDATE persona SET 
        apellido='".$this->getApellido()."', 
        nombre='".$this->getNombre()."', 
        fechaNac='".$this->getFechaNac()."',
        telefono='".$this->getTelefono()."',
        domicilio='".$this->getDomicilio()."'  
        WHERE nroDni=".$this->getNroDni();

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->modificar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $sql="DELETE FROM persona WHERE nroDni=".$this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("Persona->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Persona();
                    $obj->cargar($row['nroDni'], $row['apellido'], $row['nombre'], $row['fechaNac'], $row['telefono'], $row['domicilio']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $obj= new Persona();
            $obj->setmensajeoperacion("Persona->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    
}


