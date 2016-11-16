<?php
class Proveedor{

    private $idProveedor;
    private $nombreProveedor;
    private $rutProveedor;
    private $direccion;
    private $telefono;
    
    function __construct() {
        
    }
    
    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getNombreProveedor() {
        return $this->nombreProveedor;
    }

    function getRutProveedor() {
        return $this->rutProveedor;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setNombreProveedor($nombreProveedor) {
        $this->nombreProveedor = $nombreProveedor;
    }

    function setRutProveedor($rutProveedor) {
        $this->rutProveedor = $rutProveedor;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}
