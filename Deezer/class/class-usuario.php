<?php

	class Usuario{

		private $codigoUsuario;
		private $correo;
		private $contrasena;
		private $sexo;
		private $edad;
		private $fecha;
		private $nombreUsuario;
		private $apellido;
		private $direccion;
		private $codigopostal;
		private $ciudad;
		private $telefono;
		private $urlImagen;
		private $codigoTipoUsuario;

		public function __construct($codigoUsuario,
					$correo,
					$contrasena,
					$sexo,
					$edad,
					$fecha,
					$nombreUsuario,
					$apellido,
					$direccion,
					$codigopostal,
					$ciudad,
					$telefono,
					$urlImagen,
					$codigoTipoUsuario){
			$this->codigoUsuario = $codigoUsuario;
			$this->correo = $correo;
			$this->contrasena = $contrasena;
			$this->sexo = $sexo;
			$this->edad = $edad;
			$this->fecha = $fecha;
			$this->nombreUsuario = $nombreUsuario;
			$this->apellido = $apellido;
			$this->direccion = $direccion;
			$this->codigopostal = $codigopostal;
			$this->ciudad = $ciudad;
			$this->telefono = $telefono;
			$this->urlImagen = $urlImagen;
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($sexo){
			$this->sexo = $sexo;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getCodigopostal(){
			return $this->codigopostal;
		}
		public function setCodigopostal($codigopostal){
			$this->codigopostal = $codigopostal;
		}
		public function getCiudad(){
			return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getUrlImagen(){
			return $this->urlImagen;
		}
		public function setUrlImagen($urlImagen){
			$this->urlImagen = $urlImagen;
		}
		public function getCodigoTipoUsuario(){
			return $this->codigoTipoUsuario;
		}
		public function setCodigoTipoUsuario($codigoTipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function __toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" Correo: " . $this->correo . 
				" Contrasena: " . $this->contrasena . 
				" Sexo: " . $this->sexo . 
				" Edad: " . $this->edad . 
				" Fecha: " . $this->fecha . 
				" NombreUsuario: " . $this->nombreUsuario . 
				" Apellido: " . $this->apellido . 
				" Direccion: " . $this->direccion . 
				" Codigopostal: " . $this->codigopostal . 
				" Ciudad: " . $this->ciudad . 
				" Telefono: " . $this->telefono . 
				" UrlImagen: " . $this->urlImagen . 
				" CodigoTipoUsuario: " . $this->codigoTipoUsuario;
		}


		public function guardarUsuario($conexion){
			$sql = 	sprintf("INSERT INTO tbl_usuarios(correo, contrasena, sexo, edad) ".
					"VALUES ('%s','%s','%s','%s')",
					$conexion->antiInyeccion($this->correo),
					$conexion->antiInyeccion($this->contrasena),
					$conexion->antiInyeccion($this->sexo),
					$conexion->antiInyeccion($this->edad),
				);
			
			$resultado = $conexion->ejecutarConsulta($sql);
			if ($resultado){
				//Se agrego con exito
				$sql = 	sprintf("SELECT codigo_usuario, correo, contrasena, ".
						"sexo, edad".
						"FROM tbl_usuarios ".
						"WHERE codigo_usuario = %s",
						$conexion->ultimoId()
					);
				$resultadoUsuario = $conexion->ejecutarConsulta($sql);
				$fila = $conexion->obtenerFila($resultadoUsuario);
				$fila["codigo_resultado"] = 0;
				$fila["mensaje_resultado"] = "Registro insertado con éxito";
				echo json_encode($fila);
			}else{
				//Fallo
				$respuesta["codigo_resultado"] = 1;
				$respuesta["mensaje_resultado"] = "No se pudo guardar el registro";
				$respuesta["sql"] = $sql;
				echo json_encode($respuesta);
			}
		}

		public function seguridad(){
			session_start();
                   if (!isset($_SESSION["usr"]) || !isset($_SESSION["psw"]))
                 header("Location: index.php");

               include("class/class-conexion.php");
               $conexion = new Conexion();
               $sql = sprintf( 
               "SELECT codigo_usuario, codigo_tipo_usuario, ". 
                "correo, nombre, contrasena FROM tbl_usuarios ".
                "WHERE correo = '%s' and contrasena = '%s' and codigo_tipo_usuario = 1",
                 $_SESSION["usr"],
                 $_SESSION["psw"]
                  );

                $resultado = $conexion->ejecutarConsulta($sql);
                $respuesta = array();
                if ($conexion->cantidadRegistros($resultado)<=0){
                header("Location: index.php");
    }
    
		}

	}
?>