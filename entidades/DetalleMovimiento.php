<?php
class DetalleMovimiento{

    
    var $idDetalle;
    var $precio;
    var $cantidad;
    var $idMovimiento;
    var $idArticulo;

    function __construct() {
        
    }
    
    function getIdDetalle() {
        return $this->idDetalle;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getIdMovimiento() {
        return $this->idMovimiento;
    }

    function getIdArticulo() {
        return $this->idArticulo;
    }

    function setIdDetalle($idDetalle) {
        $this->idDetalle = $idDetalle;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setIdMovimiento($idMovimiento) {
        $this->idMovimiento = $idMovimiento;
    }

    function setIdArticulo($idArticulo) {
        $this->idArticulo = $idArticulo;
    }


}
