<?php
session_start();
include('../config/conexion.php');
$cn=conectarse(); 

$usu=$_POST['usuario'];
$clave=$_POST['clave'];

$query="SELECT * FROM usuario WHERE usuario='$usu' and clave='$clave'";
$resultado=$cn->query($query);
$datos=$resultado->rowCount();
if($datos>0){

   /* por metodo get
    $re=$resultado->fetch();
    $usuario=$re['usuario'];
    header('location: ../inicio.php?usu='.$usuario); */

    /* SESSION */
    $_SESSION['nombre']=$usu;
    $_SESSION['contrasena']=$clave;
     header('location: ../inicio.php');


}
else {
    echo "error";
}
?>