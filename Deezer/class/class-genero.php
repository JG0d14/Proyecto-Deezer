<?php

	class Genero{

		private $codigoGenero;
		private $nombreGenero;

		public function __construct($codigoGenero,
					$nombreGenero){
			$this->codigoGenero = $codigoGenero;
			$this->nombreGenero = $nombreGenero;
		}
		public function getCodigoGenero(){
			return $this->codigoGenero;
		}
		public function setCodigoGenero($codigoGenero){
			$this->codigoGenero = $codigoGenero;
		}
		public function getNombreGenero(){
			return $this->nombreGenero;
		}
		public function setNombreGenero($nombreGenero){
			$this->nombreGenero = $nombreGenero;
		}
		public function __toString(){
			return "CodigoGenero: " . $this->codigoGenero . 
				" NombreGenero: " . $this->nombreGenero;
		}
	}
?>