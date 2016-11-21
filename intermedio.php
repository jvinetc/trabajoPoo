<?php
session_start();
//abstracta maneja los servicios
include './servicio/AbstractFunction.php';
switch ($_REQUEST["funcion"]) {
    case "login":

        require_once './servicio/funcionesUsuario.php';
        require_once './entidades/Usuarios.php';
        $funcUsu = new FuncionesUsuario();
        $usuario = new Usuarios();
        $usu = $_REQUEST["usuario"];
        $pass = $_REQUEST["contrasenia"];
        $json = $funcUsu->login($usu, $pass);
        $_SESSION["usuarioJson"] = $json;
        $array = json_decode($json);
        $usuario->setContrasenia($array->contrasenia);
        $usuario->setIdUsuario($array->idUsuario);
        $usuario->setNombreUsuario($array->nombreUsuario);
        $_SESSION["usuarioEntidad"] = $usuario;
        if ($array->idUsuario > 0) {
            ?>
            <script>
                alert("Bienvenido Usuario <?php echo $array->nombreUsuario ?>.");
                location.href = "formularios.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Usuario Erroneo");
                location.href = "index.php";
            </script>
            <?php
        }
        break;
    case "guardarVenta":
        require_once './servicio/funcionesMovimiento.php';
        require_once './servicio/funsionesProductos.php';
        require_once './servicio/funcionesClientes.php';
        require_once './servicio/funcionesDetMov.php';
        require_once './entidades/Productos.php';
        require_once './entidades/Clientes.php';
        require_once './entidades/Movimiento.php';
        require_once './entidades/DetalleMovimiento.php';
        $nom_cli = $_REQUEST["nom_cli"];
        $rut_cli = $_REQUEST["rut_cli"];
        $dir_cli = $_REQUEST["dir_cli"];
        $arr_prod = $_REQUEST["producto"];
        $arr_cantidad = $_REQUEST["cantidad"];
        $arr_total = $_REQUEST["total"];
        $cliente = new Clientes();
        $cliente->setNombreCliente($nom_cli);
        $cliente->setRut($rut_cli);
        $cliente->setDireccion($dir_cli);
        $jsonCli = json_encode((array) $cliente);
        $funCli = new funcionesClientes();
        $funMov = new funcionesMovimiento();
        if ($funCli->crear($jsonCli)) {
            echo 'cliente grabado';
            $cliente->setIdCliente($funCli->ultimoId());
            $movimiento = new Movimiento();
            $movimiento->setIdCliente($cliente);
            $movimiento->setIdUsuario(json_decode($_SESSION["usuarioJson"]));
            $movimiento->setTipoMovimiento(1);
            $movimiento->setTotalMovimiento(1800);
            $jsonMov = json_encode((array) $movimiento); 
           if ($funMov->crear($jsonMov)) {
               $movimiento->setIdMovimiento($funMov->ultimoId());
               echo 'movimiento grabado';
                $funProd= new funsionesProductos();
                foreach ($arr_prod as $key => $value) {
                    $jsonProd=$funProd->buscarPorId($value);
                    $detMov= new DetalleMovimiento();
                    $detMov->setCantidad($arr_cantidad[$key]);
                    $detMov->setIdMovimiento($movimiento);
                    $detMov->setIdArticulo(json_decode($jsonProd));
                    $detMov->setPrecio($arr_total[$key]);
                    $funDetMov= new funcionesDetMov();
                     if($funDetMov->crear(json_encode($detMov))){
                        echo 'se grabo todo';
                     }else{
                         die("error faltal");
                     }
                }
            }else{
                die("error fatal");
            }
             ?>
            <script>
                alert("La venta fue grabada con exito");
                location.href = "formularios.php";
            </script>
            <?php
        }else{
            die("error fatal");
        }
        break;
}



