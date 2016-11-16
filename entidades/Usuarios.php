<?php
class Usuarios{

    private $contrasenia;
    private $idUsuario;
    private $nombreUsuario;
    
    function __construct() {
        
    }

    function getContrasenia() {
        return $this->contrasenia;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }


}
