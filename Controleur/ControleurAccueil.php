<?php

require_once "Modele/Annonce.php";
require_once "Vue/Vue.php";

class ControleurAccueil {

	private $annonce;

	public function __construct() {
		$this->annonce = new Annonce();
	}

	public function accueil() {
		$annonces = $this->annonce->getAnnonces();
		$vue = new Vue("Accueil");
		$vue->generer(array("annonces" => $annonces));
	}
}