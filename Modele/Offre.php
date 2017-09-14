<?php

require_once "Modele/Modele.php";

class Offre extends Modele {

	public function getOffres($idAnnonce) {
		$sql = "SELECT OFF_ID as id, PRE_PSEUDO as pseudo, ANN_ID as annID,"
			. " OFF_CONTENU as contenu, OFF_PRIX as prix FROM t_offre WHERE ANN_ID=?";
		$offres = $this->executerRequete($sql, array($idAnnonce));
		return $offres;
	}
}