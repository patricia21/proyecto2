<?php
function conectarse(){

	$host='localhost';
	$usuario='root';
	$clave='';
	$db='login';

	$cn=new PDO('mysql:host='.$host.';dbname='.$db,$usuario,$clave);
	return $cn;
}

?>