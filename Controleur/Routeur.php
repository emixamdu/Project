<?php

require_once "Controleur/ControleurAccueil.php";
require_once "Controleur/ControleurOffre.php";
require_once "Vue/Vue.php";

class Routeur {

	private $ctrlAccueil;
	private $ctrlOffre;

	public function __construct() {
		$this->ctrlAccueil = new ControleurAccueil();
		$this->ctrlOffre = new ControleurOffre();
	}

	public function routerRequete() {
		try {
			if (isset($_GET["action"])) {
				if ($_GET["action"] == "offre") {
					if (isset($_GET["id"])) {
						$idAnnonce = intval($_GET["id"]);
						if ($idAnnonce != 0)
							$this->ctrlOffre->offre($idAnnonce);
						else
							throw new Exception("Identifiant d'annonce non valide");
					}
					else
						throw new Exception("Identifiant d'annonce non défini");
				}
				else
					throw new Exception("Action non valide");
			}
			else {
				$this->ctrlAccueil->accueil();
			}
		}
		catch (Exception $e) {
			$this->erreur($e->getMessage());
		}		
	}

	private function erreur($msgErreur) {
		$vue = new Vue("Erreur");
		$vue->generer(array("msgErreur" => $msgErreur));
	}
}