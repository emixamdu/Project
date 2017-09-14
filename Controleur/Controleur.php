<?php

require "Modele/Modele.php";

function accueil() {
	$annonces = getAnnonces();
	require "Vue/vueAccueil.php";
}

function offre($idAnnonce) {
	$annonce = getAnnonce($idAnnonce);
	$offres = getOffres($idAnnonce);
	require "Vue/vueOffre.php";
}

function erreur($msgErreur) {
	require "Vue/vueErreur.php";
}