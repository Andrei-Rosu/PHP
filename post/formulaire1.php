<?php
	/*
		les superglobales : ce sont des variables de type ARRAY qui sont prédéfinies dans le code et qui permettent de véhiculer des données
		on peut les appeler partout dans le code, à la fois dans l'espace local et dans l'espace global	
	*/
	//echo '<pre>'; print_r($_SERVER); echo '</pre>'; // affiche des informations sur notre serveur local XAMPP
	
	echo '<pre>'; print_r($_POST); echo '</pre>';
	// exercice : afficher les données saisies dans le formulaire avec un affichage classique 
	if($_POST)
	{
		echo '<hr>Pseudo : ' . $_POST['pseudo'] . '<br>';
		echo 'Mot de passe : ' . $_POST['mdp'] . '<br>';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire 1</title>
		<style>
			label{
				float: left;
				width: 120px;
				font-style: italic;
				font-family: Calibri;
			}
		</style>
	</head>
	<body>
		<h1>Formulaire de connexion</h1>
		<hr>
		<form method="post" action=""><!-- method : comment vont circuler les données , action : URL de destination -->
			<label for="pseudo">Pseudo</label>
			<input type="text" id="pseudo" name="pseudo" placeholder="pseudo"><br><br><!-- l'attribut name est indispansable pour exploiter les données en PHP -->
			
			<label for="mdp">Mot de passe</label>
			<input type="text" id="mdp" name="mdp" placeholder="mot de passe"><br><br>
			
			<input type="submit" value="connexion">
		</form>
	</body>
</html>
