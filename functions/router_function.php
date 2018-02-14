<?php


function url(){
  return $_SERVER['REQUEST_URI'];
}
function web($url){
  $url = explode("/", $url);
  return $url[1];
}
function data($url){
  $url = explode("/", $url);
  return $url[2];
}

function file_to_include($data){
  $data = strtolower($data);
  switch ($data) {
    case '':
      return 'inicio';
      break;
      
    case 'inicio':
      return "inicio";
      break;

    case 'buscar':
      return "buscar";
      break;

    case 'imagenes':
      return "imagenes";
      break;

    case 'ayuda':
      return "ayuda";
      break;

    case 'terminos':
      return "terminos";
      break;
      
    case 'privacidad':
      return "privacidad";
      break;

    default:
      return "404";
      break;
  }
}

?>
