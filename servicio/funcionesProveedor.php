<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionesProveedor
 *
 * @author Natalia
 */
class funcionesProveedor extends AbstractFunction{
    
    private $url="http://localhost:8282/VehiculosCV/webresources/entidades.proveedor";
    protected function getUrl() {
        return $this->url;
    }

}
