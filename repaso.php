<?php
error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<h1>REPASO</h1><hr>
<?php
	
	class Cliente {

		public $idecliente;
		public $nombre;
		public $apellidos;
		public $correo;
		public $telefono;

		function __construct($idcliente=false){
			if ($idcliente !=false) {
				$this->cargar_usuario($idcliente);
				# code...
			}
		}

		function crear_usuario($nombre,$apellidos,$correo,$telefono){
				$this->idcliente= 21;
				$this->nombre= $nombre;
				$this->apellidos = $apellidos;
				$this->correo = $correo;
				$this->telefono = $telefono;
		}

		function cargar_usuario($idcliente){
			$this->idcliente=$idcliente;
			$this->nombre="Wilmer";
			$this->apellidos="Mendez";
			$this->correo="@gamil.com";
			$this->telefono=123123;

		}

		function comprar($producto,$precio){

			$precio = (float) $precio;
			echo "Su nombre es:{$this->nombre} {$this->apellidos} y ha comprado {$producto} y el costo es: S./ {$precio}";

		}

		function devolucion($idproducto){

			echo "Usted se llama {$this->nombre} {$this->apellidos} y ha devuelvo con el codigo {$idproducto} del producto ";

		}



	};

		$usuario = new Cliente(12);
		//var_dump($usuario);
		#crear usuario :D
		//$usuario->crear_usuario("wil","ape","@",1221);
		#Comprar 
		$usuario->comprar("dinosario rex",21.2);
		echo "<br/> <br/> <br/>";
		#devolucion
		$usuario->devolucion(123112);
		//var_dump($usuario);


?>
	
</body>
</html>