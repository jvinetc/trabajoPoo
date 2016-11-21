<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionesClientes
 *
 * @author Natalia
 */
class funcionesClientes extends AbstractFunction{
    private $url="http://localhost:8282/VehiculosCV/webresources/entidades.clientes";
    protected function getUrl() {
        return $this->url;
    }

}
