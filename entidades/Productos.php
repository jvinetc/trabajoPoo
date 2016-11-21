
<?php
class Productos {

    
    var $idProducto;
    var $nombreProducto;
    var $codigoProducto;
    var $cantidad;

    function __construct($array) {
        $this->idProducto=$array->idProducto;
        $this->codigoProducto=$array->codigoProducto;
        $this->nombreProducto=$array->nombreProducto;
        $this->cantidad=$array->cantidad;
    }
    
    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getCodigoProducto() {
        return $this->codigoProducto;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }

    function setCodigoProducto($codigoProducto) {
        $this->codigoProducto = $codigoProducto;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }


}
