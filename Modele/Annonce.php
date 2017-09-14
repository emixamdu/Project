<?php

require_once "Modele/Modele.php";

class Annonce extends Modele {

	public function getAnnonces() {
		$sql= "SELECT ANN_ID as id, CLI_PSEUDO as pseudo,"
			. " ANN_TITRE as titre, ANN_CONTENU as contenu, ANN_DUREE as duree, ANN_CAT as cat"
			. " FROM t_annonce";
		$annonces = $this->executerRequete($sql);
		return $annonces;
	}

	public function getAnnonce($idAnnonce) {
		$sql = "SELECT ANN_ID as id, CLI_PSEUDO as pseudo,"
			. " ANN_TITRE as titre, ANN_CONTENU as contenu, ANN_DUREE as duree, ANN_CAT as cat"
			. " FROM t_annonce WHERE ANN_ID=?";
		$annonce = $this->executerRequete($sql, array($idAnnonce));
		if ($annonce->rowCount() == 1)
			return $annonce->fetch();
		else
			throw new Exception("Aucune annonce ne correspond à l'identifiant '$idAnnonce'");
	}
}