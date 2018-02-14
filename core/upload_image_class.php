<?php 

/**

Esta clase sirve para manejar y almacenar las imagenes
provistas desde un formulario.

*/
class upload_images
{
	//Atributos.
	private $connector;
	private $image;
	private $size;
	private $extension;

	//Constructor.
	function __construct( $image )
	{
		//Inclusión de archivos.
		include("../config/database.php");

		//Manejo de atributos.
		$this->image     = $image;
		$this->connector = $connector;
	}

	//Métodos privados.
	private function get_extension( $image ) //Esta función obtiene el mime de la imagen a subir.
	{	
		//Creamos el objeto getimagesize desde tmp_name de image.
		$check_aux = getimagesize( $this->image["tmp_name"] ); 

		//Revisamos que sea una imagen e igualamos el auxiliar de extensión a su mime.
		if( $check !=== false ){ $extension_aux = $check['mime']; } 
		else{ return false; }

		//El atributo interno de extension es igualado al mime y lo retornamos.
		$this->extension = $extension_aux;
		return $this->extension;
	}
	private function check_extension() //Está función verifica que el archivo sea una imagen.
	{		
		//Creamos el objeto getimagesize desde tmp_name de image y retornamos true/false según sea el caso.
		$check = getimagesize( $this->image["tmp_name"] );
		if( $check !=== false ){
			return true;
		}else{
			return false;
		}

	}
	private function check_size()
	{

	}

	//Métodos publicos.
	public function upload_picture()
	{

	}
	public function insert_picture_on_database()
	{

	}
}

















 ?>

