/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entidades;
<?php
class Productos {

    
    private $idProducto;
    private $nombreProducto;
    private $codigoProducto;
    private $cantidad;

    function __construct() {
        
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
