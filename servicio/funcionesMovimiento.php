<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionesMovimiento
 *
 * @author Natalia
 */
class funcionesMovimiento extends AbstractFunction {
    private $url="http://localhost:8282/VehiculosCV/webresources/entidades.movimiento";
    protected function getUrl() {
        return $this->url;
    }


}
