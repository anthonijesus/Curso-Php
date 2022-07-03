<?php

	// Total de dinero disponible en el cajero
	$dineroCajero = 150000;
	// Maximo de dinero posible a retirar
	$maximoRetiro = 15000;
	// dinero disponible en la cuenta del usuario
	$dineroUsuario = 20000;
	// Respuesta del cajero
	$respuesta = "";

	
	// Prestamo
	$prestamo = 8;
	// Dinero que el usuario desea retirar
	$dineroRetirar = 10000;
	//impresion de recibo
	$impresionRecibo = false;
	
	

	if ($dineroRetirar > $dineroCajero){
		$respuesta = "El cajero no tiene la suma solicitada";
	}elseif($dineroRetirar >= $maximoRetiro){
		$respuesta = "Limite de retiro maximo alcanzado";
	}elseif ($dineroRetirar > $dineroUsuario){
		$respuesta = "Fondo insuficiente";
	}else{
		$respuesta = "Retire su dinero";
		if ($impresionRecibo){
			$respuesta .= "<br> Imprimiendo recibo";
		}else{
			$respuesta .= "<br> gracias por cuidar el planeta";
		}
			switch($prestamo){
				case 1:
					$respuesta .= " <br> Usted saco 10000";
					break;
				case 2:
					$respuesta .= "<br> Usted saco 15000";
					break;
				case 3:
					$respuesta .= "<br> Usted saco 20000";
					break;
				default:
					$respuesta .= "<br> Usted saco 30000";
		}
	}
		

	
	?>

	<html>
	<head>
		<title>Cajero Automatico</title>
	</head>
	<body>

		<h1> <?= $respuesta?> </h1>
		<hr>



	</body>
	</html>





