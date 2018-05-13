<?php

    include("../class/class-conexion.php");
    $conexion = new Conexion();
    //echo "Conexion establecida";


        switch($_GET["accion"]){
            case "registrarse":
            $sql='INSERT INTO tbl_usuarios(codigo_usuario, correo, contrasena, sexo, edad, nombre_usuario,  '.
                'apellido, fecha, direccion, codigopostal, ciudad, '.
                'telefono, url_imagen_perfil, codigo_tipo_usuario) '.
                'VALUES ("2","correo","contrasena","sexo","edad","","","","","","","","","1")';
                $resultado = $conexion->ejecutarConsulta($sql);
             echo json_encode("El Usuario ha sido registrado con exito");
        break;
        
        }
    $conexion->cerrarConexion();

?>
