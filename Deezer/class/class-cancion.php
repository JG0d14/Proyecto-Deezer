<?php

	class Cancion{

		private $codigoCancion;
		private $codigoAlbum;
		private $codigoArtista;
		private $nombreCancion;
		private $urlCancion;

		public function __construct($codigoCancion,
					$codigoAlbum,
					$codigoArtista,
					$nombreCancion,
					$urlCancion){
			$this->codigoCancion = $codigoCancion;
			$this->codigoAlbum = $codigoAlbum;
			$this->codigoArtista = $codigoArtista;
			$this->nombreCancion = $nombreCancion;
			$this->urlCancion = $urlCancion;
		}
		public function getCodigoCancion(){
			return $this->codigoCancion;
		}
		public function setCodigoCancion($codigoCancion){
			$this->codigoCancion = $codigoCancion;
		}
		public function getCodigoAlbum(){
			return $this->codigoAlbum;
		}
		public function setCodigoAlbum($codigoAlbum){
			$this->codigoAlbum = $codigoAlbum;
		}
		public function getCodigoArtista(){
			return $this->codigoArtista;
		}
		public function setCodigoArtista($codigoArtista){
			$this->codigoArtista = $codigoArtista;
		}
		public function getNombreCancion(){
			return $this->nombreCancion;
		}
		public function setNombreCancion($nombreCancion){
			$this->nombreCancion = $nombreCancion;
		}
		public function getUrlCancion(){
			return $this->urlCancion;
		}
		public function setUrlCancion($urlCancion){
			$this->urlCancion = $urlCancion;
		}
		public function __toString(){
			return "CodigoCancion: " . $this->codigoCancion . 
				" CodigoAlbum: " . $this->codigoAlbum . 
				" CodigoArtista: " . $this->codigoArtista . 
				" NombreCancion: " . $this->nombreCancion . 
				" UrlCancion: " . $this->urlCancion;
		}
	}
?>