<?php
class Movimiento{

    
    var $idMovimiento;
    var $tipoMovimiento;
    var $totalMovimiento;
    var $idProveedor;
    var $idUsuario;
    var $idCliente;
    var $idBodega;
   
    
    function __construct() {
        
    }
    

    public function getIdMovimiento() {
        return $this->idMovimiento;
    }

    function getTipoMovimiento() {
        return $this->tipoMovimiento;
    }

    function getTotalMovimiento() {
        return $this->totalMovimiento;
    }

    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdBodega() {
        return $this->idBodega;
    }

    function setIdMovimiento($idMovimiento) {
        $this->idMovimiento = $idMovimiento;
    }

    function setTipoMovimiento($tipoMovimiento) {
        $this->tipoMovimiento = $tipoMovimiento;
    }

    function setTotalMovimiento($totalMovimiento) {
        $this->totalMovimiento = $totalMovimiento;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdBodega($idBodega) {
        $this->idBodega = $idBodega;
    }


}
