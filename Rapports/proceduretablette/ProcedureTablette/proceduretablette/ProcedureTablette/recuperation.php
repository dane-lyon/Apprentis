<?php
	$titre = $_POST['titre'];
	$RNE = $_POST['RNE'];
	$etablissement = $_POST['etablissement'];
	$probleme = $_POST['probleme'];
	$resolution = $_POST['resolution'];
	$commentaire = $_POST['commentaire'];
	$etat = $_POST['etat'];
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=depannage;charset=utf8', 'root', 'dane69');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	$req = $bdd->exec('INSERT INTO Tablette(titre, RNE, etablissement, probleme, resolution, commentaire, etat)');
	$req = "INSERT INTO Tablette VALUES('$titre','$RNE','$etablissement','$probleme','$resolution','$commentaire','$etat')";
	
	echo 'La fiche a bien été ajoutée !';
	
	$pdo = null;
?>