<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php 

require('../config/conexion.php');
$cn=conectarse();

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

    echo "<p class='alert alert-success'>SE MODIFICO LA CLAVE CORRECTAMENTE</p>";
}else{

    echo "<p class='alert alert-danger'>ERROR AL MOMENTO DE MODIFICAR LA CLAVE</p>";
}


}else{

    echo "<p class='alert alert-warning'>LA CLAVE ANTERIOR NO ES CORRECTA</p>";
}


?>