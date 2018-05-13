<?php
	
	include("../class/class-usuario.php");
	
	$m = new Usuario(
            	$_POST["codigoUsuario"],
                $_POST["correo"],
                $_POST["contrasena"],
                $_POST["sexo"],
                $_POST["edad"],
                null
                null
                null
                null
                null
                null
                null
                null
                null
                null
            );

	$m->guardarUsuario();

?>