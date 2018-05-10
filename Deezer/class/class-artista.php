<?php

	class Artista{

		private $codigoArtista;
		private $nombreArtista;
		private $urlImagen;

		public function __construct($codigoArtista,
					$nombreArtista,
					$urlImagen){
			$this->codigoArtista = $codigoArtista;
			$this->nombreArtista = $nombreArtista;
			$this->urlImagen = $urlImagen;
		}
		public function getCodigoArtista(){
			return $this->codigoArtista;
		}
		public function setCodigoArtista($codigoArtista){
			$this->codigoArtista = $codigoArtista;
		}
		public function getNombreArtista(){
			return $this->nombreArtista;
		}
		public function setNombreArtista($nombreArtista){
			$this->nombreArtista = $nombreArtista;
		}
		public function getUrlImagen(){
			return $this->urlImagen;
		}
		public function setUrlImagen($urlImagen){
			$this->urlImagen = $urlImagen;
		}
		public function __toString(){
			return "CodigoArtista: " . $this->codigoArtista . 
				" NombreArtista: " . $this->nombreArtista . 
				" UrlImagen: " . $this->urlImagen;
		}
	}
?>