<?php $this->titre = "Louer du temps - Annonce n°" . $annonce["id"]; ?>
<article>
	<header>
		<h1 class="titreAnnonce"><?= $annonce["titre"] ?></h1>
		<p>Publiée par <?= $annonce["pseudo"] ?></p>
		<p>Volume horaire souhaité: <?= $annonce["duree"] ?> heure(s)</p>
	</header>
	<p><?= $annonce["contenu"] ?></p>
</article>
<hr/>
<header>
	<h1 id="titreOffres">Offres déposées</h1>
</header>
<?php foreach ($offres as $offre) : ?>
	<div id="caseOffre">
		<h2><?= $offre["pseudo"] ?></h2>
		<p>Prix proposé : <?= $offre["prix"] ?> € de l'heure</p>
		<br/>
		<p><?= $offre["contenu"] ?></p>
	</div>
<?php endforeach; ?>

