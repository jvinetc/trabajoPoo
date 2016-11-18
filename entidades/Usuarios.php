<?php
class Usuarios{

    var $contrasenia;
    var $idUsuario;
    var $nombreUsuario;
    
    public function __construct() {
        
    }

    public function getContrasenia() {
        return $this->contrasenia;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }


}
