<?php

	class Favoritas{

		private $codigoFavoritas;
		private $codigoUsuario;
		private $codigoCancion;

		public function __construct($codigoFavoritas,
					$codigoUsuario,
					$codigoCancion){
			$this->codigoFavoritas = $codigoFavoritas;
			$this->codigoUsuario = $codigoUsuario;
			$this->codigoCancion = $codigoCancion;
		}
		public function getCodigoFavoritas(){
			return $this->codigoFavoritas;
		}
		public function setCodigoFavoritas($codigoFavoritas){
			$this->codigoFavoritas = $codigoFavoritas;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getCodigoCancion(){
			return $this->codigoCancion;
		}
		public function setCodigoCancion($codigoCancion){
			$this->codigoCancion = $codigoCancion;
		}
		public function __toString(){
			return "CodigoFavoritas: " . $this->codigoFavoritas . 
				" CodigoUsuario: " . $this->codigoUsuario . 
				" CodigoCancion: " . $this->codigoCancion;
		}
	}
?>