<?php


class funsionesProductos extends AbstractFunction {
    private $url = "http://localhost:8282/VehiculosCV/webresources/entidades.productos";
   
    protected function getUrl() {
        return $this->url; 
    }

}
