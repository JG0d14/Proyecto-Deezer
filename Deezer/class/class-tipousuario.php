<?php

	class TipoUsuario{

		private $codigoTipoUsuario;
		private $tipoUsuario;

		public function __construct($codigoTipoUsuario,
					$tipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
			$this->tipoUsuario = $tipoUsuario;
		}
		public function getCodigoTipoUsuario(){
			return $this->codigoTipoUsuario;
		}
		public function setCodigoTipoUsuario($codigoTipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function getTipoUsuario(){
			return $this->tipoUsuario;
		}
		public function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
		}
		public function __toString(){
			return "CodigoTipoUsuario: " . $this->codigoTipoUsuario . 
				" TipoUsuario: " . $this->tipoUsuario;
		}
	}
?>