<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionesDetMov
 *
 * @author Natalia
 */
class funcionesDetMov extends AbstractFunction{
    private $url="http://localhost:8282/VehiculosCV/webresources/entidades.detallemovimiento";
    
    protected function getUrl() {
        return $this->url;
    }
    
    function buscarIdMov($id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url."/porId/".$id);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/xml"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = simplexml_load_string(curl_exec($ch)); 
        curl_close($ch);
        return json_encode((array)$result);
    }

}
