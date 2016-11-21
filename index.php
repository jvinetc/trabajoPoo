<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>

    <body>

    <center>
        <form id="form-login" action="intermedio.php" method="post" autocomplete="off">
            <input type="hidden" name="funcion" value="login"/>
            <table border="1" style="margin: 20% 0 0 0">
                <thead>
                    <tr>
                        <th colspan="2"><h1>Login</h1></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Usuario</th>
                        <td><b>:</b>                                
                            <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" required="">
                        </td>
                    </tr>
                    <tr>
                        <th>Contraseña</th>
                        <td><b>:</b>
                            <input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" > 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" id="submit" name="submit" value="Ingresar" class="boton">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>  
    </center>
</body>

</html>