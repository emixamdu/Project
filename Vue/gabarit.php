<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css"/>
		<title><?=$titre?></title>
	</head>

	<body>
		<div id="global">
			<header>
				<a href="index.php"><h1 id="titreSite">Louer du temps</h1></a>
				<p id="slogan">Le premier site de location de temps</p>
				<div id="liens">
					<a href="index.php">Connexion</a>
					<a href="index.php">Inscription</a>
				</div>
			</header>
			<div id="contenu">
				<?=$contenu?>
			</div>
			<footer id="piedPage">
				Pied de page
			</footer>
		</div>
	</body>
</html>