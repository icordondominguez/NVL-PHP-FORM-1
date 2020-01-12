<?php
	$email = $_GET['email'];
	$contraseña = $_GET['contraseña'];
	$contraseña2 = $_GET['contraseña2'];

	if(empty($email) || empty($contraseña) || empty($contraseña2)){
		echo "Debe rellenar todos los campos";
	}else if($contraseña != $contraseña2 || strlen($contraseña)<8){
		echo "error en el formulario";
	}
?>