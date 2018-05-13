<?php

    include("../class/class-conexion.php");
	$conexion = new Conexion();
    echo "Conexion establecida<br>";


        switch($_GET["accion"]){
            case "registrarse":
            break;
        
        }

	
	$conexion->cerrarConexion();


?>