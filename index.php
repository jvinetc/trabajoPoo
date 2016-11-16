
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
</head>
 
<body>
            <h1 align= "center">Login</h1>

            <form id="form-login" action="intermedio.php" method="post" autocomplete="off">
                <input type="hidden" name="funcion" value="login"/>
                    <p><label>Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required="">
                    <p><label>Contraseña:</label></p>
                        <input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required="">
 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>            
            
</body>
 
</html>