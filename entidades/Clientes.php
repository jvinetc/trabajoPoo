<?php

class Clientes {

    var $idCliente;
    var $nombreCliente;
    var $rut;
    var $direccion;
    var $telefono;

    function __construct() {
        
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNombreCliente() {
        return $this->nombreCliente;
    }

    function getRut() {
        return $this->rut;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNombreCliente($nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}