<?php 
/*

Este documento contiene el controlador de las rutas
dentro del sitio web.

*/
function import_from_data( $data ){
	return LAYOUT_DIR . strtolower($data) . "_layout.php";
}

 ?>