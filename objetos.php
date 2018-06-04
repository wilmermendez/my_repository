<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<h1>Practica de cración objetos y prática.</h1><hr>
<?php

class Gato {
	public $color;
	public $peso;
	public $edad;
	public $raza;

	function andar(){

	}

	function saltar(){

	}

	function comer(){

	}

	function dormir(){
		
	}
	function cargar_datos(){
		$this->color = "negro";
		$this->peso="5kg";
		$this->edad="2 años";
		$this->raza="persa";
	}

};

$gato1 = new Gato;
$gato1->cargar_datos();
echo ("Este gato es $gato1->raza, pesa $gato1->peso kilos, es de color $gato1->color, y tiene $gato1->edad ");





/*Y ahora, a por los deberes:

Cread el objeto "Gato"
Asignadle las siguientes variables:
$color
$peso
$edad
$raza
Asignadle las siguientes funciones:
andar()
saltar()
comer()
dormir()
Cread una función pública llamada "cargar_datos()" que cargue todas las variables del objeto. Podéis usar los datos:
$color = negro
$peso = 5kg
$edad = 2 años
$raza = persa
Cread una variable "gato1"
Imprimid por pantalla la siguiente frase:
Éste gato es $raza, pesa $peso kilos, es de color $color, y tiene $edad años.
Que debería quedar así:
Éste gato es persa, pesa 5 kilos, es de color negro, y tiene 2 años.*/
?>


	
</body>
</html>