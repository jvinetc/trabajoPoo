<?php
session_start();
include './servicio/AbstractFunction.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="utf-8">
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/jquery.Rut.js" type="text/javascript"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
    </head>
    <body>
    <center>
        <form name="formSeleccion" action="formularios.php" method="post">
            Estado actualSeleccione Accion:
            <select id="status"  name="status" onChange="formSeleccion.submit()">
                <option value="">seleccione</option> 
                <option value="1" <?php echo ($_REQUEST["status"] == 1) ? "selected" : "" ?>>venta</option>
                <option value="2" <?php echo ($_REQUEST["status"] == 2) ? "selected" : "" ?>>compra</option>
            </select>
        </form>        
        <?php
        if ($_REQUEST["status"] == 1 && !empty($_REQUEST["status"])) {
            ?>
        <form id="venta" name="forma" style="margin: 5% 0 0 0;" action="intermedio.php" method="post" >
                <h1 align= "center">Venta de Productos</h1>
                <input type="hidden" name="funcion" value="guardarVenta"/>
                <br>
                <h4>Datos Cliente</h4>
                <label >Nombre Cliente:</label>
                <input name="nom_cli" type="text" id="nom_cli" placeholder="Juan Perez" autofocus="" required="">
                <label >Rut :</label>
                <input name="rut_cli" type="text" id="rut_cli" placeholder="xx.xxx.xxx-x" autofocus="" required="">
                <label >Direccion :</label>
                <input name="dir_cli" type="text" id="dir_cli" placeholder="av colon 854" autofocus="" required="">
                <h4>Datos Producto</h4>
                <table border="1" style="width: 50%">
                    <thead>
                        <tr>
                            <th colspan="6">Lista de productos</th>                                    
                        </tr>
                        <tr>
                            <th>
                                <input type="checkbox" id="producto0" onchange="eleccion(this, this.form)" name="producto[]" value=""/> 
                            </th>
                            <th>
                                Codigo
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once './servicio/funsionesProductos.php';
                        require_once './entidades/Productos.php';
                        $fun = new funsionesProductos();
                        $arrayProd = (array) json_decode($fun->listar());
                        $x = 0;
                        foreach ($arrayProd["productos"] as $key => $value) {
                            $producto = new Productos($value);
                            ?>
                            <tr>
                                <th><input type="checkbox" id="producto<?= $key + 1 ?>" name="producto[<?= $key + 1 ?>]" value="<?= $producto->idProducto ?>"/></th>
                                <td><?= $producto->getCodigoProducto() ?></td>
                                <td><?= $producto->getNombreProducto() ?></td>
                                <td><?= $producto->getCantidad() ?></td>
                                <td><input type="number" min="0" name="cantidad[<?= $key + 1 ?>]" onchange="calculaTotal('<?= $producto->getCantidad() ?>', this.value, '<?= $x + 1 ?>', this.form)"></td>
                                <td><input type="number" min="0" name="total[<?= $key + 1 ?>]" readonly=""></td>                            

                            </tr>
                            <?php
                            $x++;
                        }
                        ?>
                        <tr>
                            <th colspan="6"><input type="button" value="Registrar venta" class="boton" onclick="validaSeleccion(this.form, '<?= $x?>')"></th>
                        </tr>
                    </tbody>
                </table><br>	
                 </form>
                <?php
            } else if ($_REQUEST["status"] == 2 && !empty($_REQUEST["status"])) {
                ?>
           
            <form  id="compra" style="margin: 5% 0 0 0;" action="intermedio.php" method="post">
                <h1 align= "center">Ingreso Compra Producto</h1>
                <br>

                <br>
                <h4>Datos Proveedor</h4>
                <label for="nom_prov">Nombre Proveedor:</label>
                <input name="nom_prov" type="text" id="nom_prov" placeholder="zapatitos rotos" autofocus="" required="">
                <label >Rut :</label>
                <input name="rut_prov" type="text" id="rut_prov" placeholder="xx.xxx.xxx-x" autofocus="" required="">
                <label >Telefono :</label>
                <input name="tel_prov" type="text" id="tel_prov" placeholder="12345678" autofocus="" required="">
                <label >Email :</label>
                <input name="email_prov" type="text" id="email_prov" placeholder="abc@def.cl" autofocus="" required="">	
                <h4>Datos Producto</h4>
                <label >Nombre Producto:</label>
                <input name="nom_prod" type="text" id="nom_prod" placeholder="Lapiz rojo " autofocus="" required="">
                <label >Codigo  :</label>
                <input name="Cod_prod" type="text" id="Cod_prod" placeholder="1234" autofocus="" required="">
                <label >Precio unitario  :</label>
                <input name="precio_prod" type="text" id="precio_prod" placeholder="$$$$" autofocus="" required="">	
                <label >Cantidad productos Comprados :</label>
                <input name="cant_prod" type="text" id="cant_prod" placeholder="1000" autofocus="" required="">	
                <label >Precio Total   :</label>
                <input name="precio_total" type="text" id="precio_total" placeholder="$$$$" autofocus="" required="">
                <h4>Datos bodega de recepcion de productos</h4>
                <label >Nombre Bodega:</label>
                <input name="nom_bod" type="text" id="nom_bod" placeholder="bodega sur " autofocus="" required="">
                <label >Codigo Bodega  :</label>
                <input name="Cod_bod" type="text" id="Cod_bod" placeholder="5678" autofocus="" required="">
                <p id="bot"><input type="submit" id="submit" name="submit" value="Registrar compra" class="boton"></p>
            </form>
            <?php
        }
        ?>
        
        <table border="1">
            <thead>
                <tr>
                    <th>N&deg;</th>
                    <th>Cliente</th>
                    <th>Usuario</th>
                    <th>Articulos</th>
                    <th>Precio</th>
                    <th>Total Venta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        require_once './servicio/funcionesDetMov.php';
                        require_once './servicio/funcionesMovimiento.php';
                        $funMov= new funcionesMovimiento();
                        $funDetMov= new funcionesDetMov();
                        //echo $funDetMov->buscarIdMov(2)."<br>";
                        //echo $funMov->listar();
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>       
                <?php
                ?>        
            </tbody>
        </table>

    </center>
</body>
</html>