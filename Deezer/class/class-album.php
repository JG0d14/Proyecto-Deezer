<?php

	class Album{

		private $codigoAlbum;
		private $codigoArtista;
		private $codigoGenero;
		private $nombreAlbum;
		private $urlImagen;
		private $duracion;

		public function __construct($codigoAlbum,
					$codigoArtista,
					$codigoGenero,
					$nombreAlbum,
					$urlImagen,
					$duracion){
			$this->codigoAlbum = $codigoAlbum;
			$this->codigoArtista = $codigoArtista;
			$this->codigoGenero = $codigoGenero;
			$this->nombreAlbum = $nombreAlbum;
			$this->urlImagen = $urlImagen;
			$this->duracion = $duracion;
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
		public function getCodigoGenero(){
			return $this->codigoGenero;
		}
		public function setCodigoGenero($codigoGenero){
			$this->codigoGenero = $codigoGenero;
		}
		public function getNombreAlbum(){
			return $this->nombreAlbum;
		}
		public function setNombreAlbum($nombreAlbum){
			$this->nombreAlbum = $nombreAlbum;
		}
		public function getUrlImagen(){
			return $this->urlImagen;
		}
		public function setUrlImagen($urlImagen){
			$this->urlImagen = $urlImagen;
		}
		public function getDuracion(){
			return $this->duracion;
		}
		public function setDuracion($duracion){
			$this->duracion = $duracion;
		}
		public function __toString(){
			return "CodigoAlbum: " . $this->codigoAlbum . 
				" CodigoArtista: " . $this->codigoArtista . 
				" CodigoGenero: " . $this->codigoGenero . 
				" NombreAlbum: " . $this->nombreAlbum . 
				" UrlImagen: " . $this->urlImagen . 
				" Duracion: " . $this->duracion;
		}
	}
?>