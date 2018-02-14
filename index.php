<?php 
/*

Este documento es la página inicial del sitio web.

*/


//Manejo de url.
include("config/url.php");
include("functions/router_function.php");
include("controller/router_controller.php");

$url  = url();
$data = data( $url );
$data = file_to_include( $data );

//Sección de renderizado de página.
include("layout/component/head_component.php");
include("layout/component/nav_component.php");
include( import_from_data( $data ) );
include("layout/component/finish_component.php");
 ?>


