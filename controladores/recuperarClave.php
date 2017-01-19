
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
   <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
    </div>
    <div id="contenidoLog" class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
    <form   method="POST" action="recuperarClave.php">
        <div class="form-group">
            <label  for="">Ingrese Usuario</label>
            <input class="form-control" name="usuario" type="text">
        </div>
        <div class="form-group">
            <label  for="">Contraseña anterior</label>
            <input class="form-control" name="anterior" type="password">
        </div>
        <div class="form-group">
            <label  for="">Nueva contraseña</label>
            <input class="form-control" name="nueva" type="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">MODIFICAR</button>
    </form>
    </div>
</body>
</html>

<?php 

require('../config/conexion.php');
$cn=conectarse();

if(isset($_POST['nueva'])){

$usu=$_POST['usuario'];
$anterior=$_POST['anterior'];
$nueva=$_POST['nueva'];

$query="SELECT * FROM usuario WHERE usuario='$usu' and clave='$anterior'";
$resultado=$cn->query($query);
$datos=$resultado->rowCount();
if($datos>0){

$res=$resultado->fetch();
$cod=$res['codigo'];


$sql="UPDATE usuario SET clave='$nueva' WHERE codigo='$cod'";
$respuesta=$cn->query($sql);

if($respuesta->rowCount()>0){

    echo "<p style='text-align=center;' class='alert alert-success'>SE MODIFICO LA CLAVE CORRECTAMENTE</p>";
}else{

    echo "<p style='text-align=center;' class='alert alert-danger'>ERROR AL MOMENTO DE MODIFICAR LA CLAVE</p>";
}


}else{

    echo "<p style='text-align=center;' class='alert alert-warning'>LA CLAVE ANTERIOR NO ES CORRECTA</p>";
}

}

?>