<?php

$error = $_GET['error'];
	if($error == 1){

		echo "
				<br>
				<h3 style='text-aling:center;'>
				<span style='color: red;'>
				ERROR 1
				</span>
				: Las contraseñas no coinsiden, prueba a registrarte nuevamente!
				</h3>
				</br>
				";
	}
	elseif($error == 2){

		echo "
				<br>
				<h3 style='text-align:center;'>
				<span style='color: red;'>
				ERROR 2
				</span>
				: Los datos de acceso no son correctos, intenta nuevamente!
				</h3>
				</br>
				";
			}
	elseif($error == 3){


		echo "
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 3
				</span>
				: Debe selecionar si es empresa o es individuo!
				</h3>
				<br>";
	}
?>