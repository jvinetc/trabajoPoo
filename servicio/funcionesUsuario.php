<?php

class FuncionesUsuario {

    function listarTodos() {
        $url = "http://localhost:35056/VehiculosCV2/webresources/entidades.usuarios";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HEADER, "Content-type:apllication/xml");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = simplexml_load_string(curl_exec($ch));
        curl_close($ch);
        $json = json_encode((array) $data);
        //$json = json_encode($data);
        return $json;
    }

    function login($nombreUsuario, $contrasenia) {
        $url = "http://localhost:35056/VehiculosCV2/webresources/entidades.usuarios/login/" . $nombreUsuario . "/" . $contrasenia;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HEADER, "Content-Type:application/xml");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = simplexml_load_string(curl_exec($ch));
        curl_close($ch);
        $json = json_encode((array) $result);
        return $json;
    }

}

function GuardarVentaClientes($id_cliente, $nombre_cliente, $rut, $direccion, $telefono) {
    $url = "http://localhost:8080/VehiculosCV/webresources/entidades.clientes";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("'Content-type:apllication/xml'"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $xmlGuardarVentaClientes = "<clientes>
                    <id_cliente>$id_cliente</id_cliente>
                    <nombre_cliente>$nombre_cliente</nombre_cliente>
                    <rut>$rut</rut>
                    <direccion>$direccion</direccion>
                    <teñefono>$telefono</teñefono>    
                        
                </clientes>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlGuardarVentaClientes);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function GuardarVentaProductos($id_producto, $nombre_producto, $codigo_producto, $cantidad) {
    $url = "http://localhost:8080/VehiculosCV/webresources/entidades.productos";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("'Content-type:apllication/xml'"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $xmlGuardarVentaProductos = "<productos>
                    <id_producto>$id_producto</id_producto>
                    <nombre_producto>$nombre_producto</nombre_producto>
                    <codigo_producto>$codigo_producto</codigo_producto>
                    <cantidad>$cantidad</cantidad>
                      
                      
                </productos>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlGuardarVentaProductos);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function eliminar($idPersona) {
    $url = 'http://localhost:8080/clase181016/webresources/entidades.persona';
}

function buscarPorId($id) {
    $url = "http://localhost:8080/clase181016/webresources/entidades.persona" . $id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/xml"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $xml = new SimpleXMLElement($data);
    return $xml;
}
