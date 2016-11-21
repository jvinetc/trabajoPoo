<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionesBodega
 *
 * @author Natalia
 */
class funcionesBodega extends AbstractFunction{
    private $url="http://localhost:8282/VehiculosCV/webresources/entidades.bodega";
    protected function getUrl() {
        return $this->url;
    }

}
