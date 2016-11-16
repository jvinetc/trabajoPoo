<?php
session_start();
require_once './servicio/funcionesUsuario.php';
require_once './entidades/Usuarios.php';
switch ($_REQUEST["funcion"]) {
    case "login":
        $funcUsu= new FuncionesUsuario();
        $usuario= new Usuarios();
        $usu = $_REQUEST["usuario"];
        $pass = $_REQUEST["contrasenia"];
        $json = $funcUsu->login($usu, $pass);
        $_SESSION["usuarioJson"]=$json;
        $array = json_decode($json);
        $usuario->setContrasenia($array->contrasenia);
        $usuario->setIdUsuario($array->idUsuario);
        $usuario->setNombreUsuario($array->nombreUsuario);
        $_SESSION["usuarioEntidad"]=$usuario;
        if ($array->idUsuario > 0 ) {
            ?>
            <script>
                alert("Bienvenido Usuario <?php echo $array->nombreUsuario ?>.");
                        location.href="formularios.php";
            </script>
            
            <?php
            //header("Location:");
        }  else {
                    ?>
            <script>
                alert("Usuario Erroneo");
                location.href="index.php";
            </script>
            
            <?php
           // header("Location:index.php");
        }
        break;
    case "guardarVenta":
        
        $nom_cli = $_REQUEST["nom_cli"];
        $rut_cli = $_REQUEST["rut_cli"];
        $dir_cli = $_REQUEST["dir_cli"];
        $nom_prod = $_REQUEST["nom_prod"];
        $Cod_prod = $_REQUEST["Cod_prod"];
        $precio_prod = $_REQUEST["precio_prod"];
        $cant_prod = $_REQUEST["cant_prod"];
        $precio_total_venta = $_REQUEST["precio_total_venta"];
        
        break;
        
}



