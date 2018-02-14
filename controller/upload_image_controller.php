<?php 
/*

Este documento contiene el controlador de subida de 
imagenes al servidor.

*/

//Inclusión de archivos.
include("../core/upload_image_class.php");

//Variables.
$image    = $_FILES["image"]["name"];
$uploader = upload_images( $image );

 ?>