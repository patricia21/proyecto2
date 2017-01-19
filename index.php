<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
    </div>
    <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4" id="contenidoLog">
        <div class="panel panel-default" >
            <div class="panel-body">
                <form action="controladores/validaLogin.php" method="POST" role="form">
                    <legend class="titulo">Login</legend>
                
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input  name="usuario" type="text" class="form-control"  placeholder="ingrese usuario">
                    </div>   
                    <div class="form-group">
                        <label for="">Clave</label>
                        <input name="clave" type="text" class="form-control"  placeholder="Ingrese clave">
                    </div>             
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
                <div class="recuperando">
                <a class="recupera" href="controladores/recuperarClave.php">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>