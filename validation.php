<?php

	$pattern = '|@gmail.com$|';
	$email = $_POST['email'];
	if (preg_match($pattern, $email) == 1){
		echo 'El email ' . $email . ' es correcto.';
	}
	else{
		echo 'El email introducido es un email invalido.';
	}
?>