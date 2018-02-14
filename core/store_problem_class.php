<?php 
/**

Esta clase sirve para manejar y almacenar los datos
recibidos por un controlador store_problems desde
un formulario.

*/
class store_problem
{
	//Atributos.
	private $connector;
	//Constructor.
	function __construct()
	{		
		//Inclusión de archivos.
		include("../config/database.php");

		//Manejo de atributos.
		$this->connector = $connector;
	}

	//Métodos privados.
	private function clean_data( $data )
	{
		return htmlspecialchars( $data );
	}

	//Métodos publicos.
	public function store_now($cn, $ce, $cp)
	{	

		$cn = self::clean_data($cn);
		$ce = self::clean_data($ce);
		$cp = self::clean_data($cp);
		$cd = date("j-m-Y");

		$query = "INSERT INTO ayuda (name, email, problem, date_c) VALUES ('$cn', '$ce', '$cp', '$cd')";
		$obj   = mysqli_query( $this->connector, $query );

		if( $obj ){
			return true;
		}else{
			return false;
		}

	}
}


 ?>