<?php 
/*

Este documento contiene las string que almacenan
los datos de conexión a la base de datos.

*/

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DATA", "waifubooru");

$connector = new mysqli(HOST, USER, PASS, DATA);
 ?>