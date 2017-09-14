<?php

require_once "Modele/Annonce.php";
require_once "Modele/Offre.php";
require_once "Vue/Vue.php";

class ControleurOffre {

	private $annonce;
	private $offre;

	public function __construct() {
		$this->annonce = new Annonce();
		$this->offre = new Offre(); 
	}

	public function offre($idAnnonce) {
		$annonce = $this->annonce->getAnnonce($idAnnonce);
		$offres = $this->offre->getOffres($idAnnonce);
		$vue = new Vue("Offre");
		$vue->generer(array("annonce" => $annonce, "offres" => $offres));
	}
}