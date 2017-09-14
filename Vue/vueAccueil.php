<?php $this->titre = "Louer du temps"?>
<?php foreach ($annonces as $annonce): ?>
	<article>
		<header>
			<a href="<?='index.php?action=offre&id=' . $annonce['id'] ?>">
				<h1 class="titreAnnonce"><?= $annonce["titre"] ?></h1>
			</a>
			<p>Publiée par <?= $annonce["pseudo"] ?></p>
			<p>Volume horaire souhaité : <?= $annonce["duree"] ?> heure(s)</p>
		</header>
		<p><?= $annonce["contenu"] ?></p>
	</article>
	<hr/>
<?php endforeach; ?>
