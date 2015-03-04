<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Identification</title>
		<link rel="stylesheet" type="text/css" href="styles.css" media="all"/>
		<link rel="icon" type="image/png" href="images/icone.png"/>
	</head>
	<body>
		<?php include("header.php"); ?>
		<p><form>
			<div class="sbloc"><br/>		
				Nom d'utilisateur :<br/>
				<input type="text" name="usr"><br/>
				Mot de passe :<br/>
				<input type="password" name="pwd"><br/><br/>
				<hr>
				<a href="fiche.php"> Connexion </a>
				<p><a href="resultats.php"> Résultats </a></p>
			</div>
		</form></p>
		<?php include("footer.php"); ?>
	</body>
</html>