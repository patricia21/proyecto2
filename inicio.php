<?php 
//$usuario=$_GET['usu'];s
session_start();

if(isset($_SESSION['nombre'])){

$usuario=$_SESSION['nombre'];
$clave=$_SESSION['contrasena']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="salir.php">SALIR</a>
    <h1>BIENVENIDO <?php echo $usuario; ?></h1>
    <h1>ESTA ES MI CLAVE : <?php echo $clave; ?> </h1>


</body>
</html>

<?php 
}else{ 

header('location: index.php');

} ?>

