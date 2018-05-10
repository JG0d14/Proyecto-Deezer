<?php

	class Usuario{

		private $codigoUsuario;
		private $correo;
		private $contrasena;
		private $nombreUsuario;
		private $apellido;
		private $sexo;
		private $fecha;
		private $direccion;
		private $codigopostal;
		private $ciudad;
		private $telefono;
		private $urlImagen;
		private $codigoTipoUsuario;

		public function __construct($codigoUsuario,
					$correo,
					$contrasena,
					$nombreUsuario,
					$apellido,
					$sexo,
					$fecha,
					$direccion,
					$codigopostal,
					$ciudad,
					$telefono,
					$urlImagen,
					$codigoTipoUsuario){
			$this->codigoUsuario = $codigoUsuario;
			$this->correo = $correo;
			$this->contrasena = $contrasena;
			$this->nombreUsuario = $nombreUsuario;
			$this->apellido = $apellido;
			$this->sexo = $sexo;
			$this->fecha = $fecha;
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
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($sexo){
			$this->sexo = $sexo;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
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
				" NombreUsuario: " . $this->nombreUsuario . 
				" Apellido: " . $this->apellido . 
				" Sexo: " . $this->sexo . 
				" Fecha: " . $this->fecha . 
				" Direccion: " . $this->direccion . 
				" Codigopostal: " . $this->codigopostal . 
				" Ciudad: " . $this->ciudad . 
				" Telefono: " . $this->telefono . 
				" UrlImagen: " . $this->urlImagen . 
				" CodigoTipoUsuario: " . $this->codigoTipoUsuario;
		}
	}
?>