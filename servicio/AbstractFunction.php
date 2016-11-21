<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractFunction
 *
 * @author Natalia
 */
abstract class AbstractFunction {
    
    abstract protected function getUrl();
    
    public function listar() {
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl());
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HEADER, "Content-type:apllication/xml");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = simplexml_load_string(curl_exec($ch));
        curl_close($ch);
        $json = json_encode((array) $data);
        return $json;
    }
    
    function crear($entidad){        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl());
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $entidad);
        $result = curl_exec($ch); 
        curl_close($ch);
        return $result;
    }
    
    function editar($id, $entidad){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl()."/".$id);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"PUT");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $entidad);
        $result = curl_exec($ch); 
        curl_close($ch);
        return $result;
    }
    
    function borrar($id, $entidad){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl()."/".$id);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $entidad);
        $result = curl_exec($ch);  
        curl_close($ch);
        return $result;
    }
    
    function buscarPorId($id){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl()."/".$id);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/xml"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = simplexml_load_string(curl_exec($ch)); 
        curl_close($ch);
        return json_encode((array)$result);
    }
    
    function contar(){
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl()."/count");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/text_plain"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result =curl_exec($ch); 
        curl_close($ch);
        return $result;
    }
    
    function ultimoId(){
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl()."/ultimoId");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/text_plain"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result =curl_exec($ch); 
        curl_close($ch);
        return $result;
    }
}
