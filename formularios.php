<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="utf-8">

        <script type="text/javascript">

            function mostrar(id) {
                if (id === "venta") {
                    document.getElementById("venta").style.visibility = "visible";
                    document.getElementById("compra").style.visibility = "hidden";

                }

                if (id === "compra") {
                    document.getElementById("venta").style.visibility = "hidden";
                    document.getElementById("compra").style.visibility = "visible";
                }
            }


        </script>

    </head>


    <body>
        <form action="intermedio.php" method="post">
            Estado actual: 
            <select id="status" name="status" onChange="mostrar(this.value);">
                <option value="">seleccione</option> 
                <option value="venta">venta</option>
                <option value="compra">compra</option>
            </select>
        </form>


        <div id="venta" style="visibility:hidden;"> 
            <h1 align= "center">Venta de Productos</h1>

            <form id="form-login" action="intermedio.php" method="post" autocomplete="off" >
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

                <label >Nombre Producto:</label>
                <input name="nom_prod" type="text" id="nom_prod" placeholder="Lapiz rojo " autofocus="" required="">
                <label >Codigo  :</label>
                <input name="Cod_prod" type="text" id="Cod_prod" placeholder="1234" autofocus="" required="">
                <label >Precio unitario  :</label>
                <input name="precio_prod" type="text" id="precio_prod" placeholder="$$$$" autofocus="" required="">
                <label >Cantidad productos  :</label>
                <input name="cant_prod" type="text" id="cant_prod" placeholder="1000" autofocus="" required="">	
                <label >Precio Total venta :</label>
                <input name="precio_total_venta" type="text" id="precio_total_venta" placeholder="$$$$" autofocus="" required="">	

                <!--<h4>Datos bodega  productos</h4>
                                           <label >Nombre Bodega:</label>
                           <input name="nom_bod" type="text" id="nom_bod" placeholder="bodega sur " autofocus="" required=""></p>
                       <label >Codigo Bodega  :</label>
                           <input name="Cod_bod" type="text" id="Cod_bod" placeholder="5678" autofocus="" required=""></p> -->


                <p id="bot"><input type="submit" id="submit" name="submit" value="Registrar venta" class="boton"></p>				

            </form>
        </div>

        <div id="compra" style="visibility:hidden"> 

            <h1 align= "center">Ingreso Compra Producto</h1>

            <form id="form-login" action="intermedio.php" method="post" autocomplete="off">
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
        </div>
    </body>

</html>