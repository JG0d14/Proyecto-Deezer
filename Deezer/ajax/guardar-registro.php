<?php
	
	include("../class/class-conexion.php");
	$conexion = new Conexion();
    echo "Conexion establecida<br>";
     
    $sql='INSERT INTO tbl_usuarios(codigo_usuario, correo, contrasena, sexo, edad, nombre_usuario,  '.
                'apellido, fecha, direccion, codigopostal, ciudad, '.
                'telefono, url_imagen_perfil, codigo_tipo_usuario) '.
                'VALUES ("1","UsuarioIngresado@gmail.com","asd.456","1","15","Goku","El sayayin","","","","","","","1")';
       
        $resultado = $conexion->ejecutarConsulta($sql);
        echo json_encode("El Usuario ha sido registrado con exito");

	
	$conexion->cerrarConexion();

?>