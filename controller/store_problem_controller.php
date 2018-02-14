<?php 
/*

Este documento contiene el controlador de guardado
de datos para el formulario de ayuda.

*/
include("../core/store_problem_class.php");

$cn = $_POST["cn"];
$ce = $_POST["ce"];
$cp = $_POST["cp"];

$storage = new store_problem; 

if( $storage->store_now( $cn, $ce, $cp ) )
{
	echo "true";
}
else
{
	echo "false";
}

 ?>