<?php

class Bodega  {

    
    var $idBodega;
    var $nombreBodega;
    var $codigoBodega;
    var $idProducto;

    function __construct() {
        
    }

    function getIdBodega() {
        return $this->idBodega;
    }

    function getNombreBodega() {
        return $this->nombreBodega;
    }

    function getCodigoBodega() {
        return $this->codigoBodega;
    }

    function getIdProducto() {
        return $this->idProducto;
    }

    function setIdBodega($idBodega) {
        $this->idBodega = $idBodega;
    }

    function setNombreBodega($nombreBodega) {
        $this->nombreBodega = $nombreBodega;
    }

    function setCodigoBodega($codigoBodega) {
        $this->codigoBodega = $codigoBodega;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }


}
