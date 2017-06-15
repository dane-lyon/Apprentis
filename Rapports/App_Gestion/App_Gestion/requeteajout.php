<?php
	$modele = $_POST['modele'];
	$ref = $_POST['ref'];
	$refdane =  $_POST['refdane'];
	$nom = $_POST['nom'];
	$mail = $_POST['mail'];
	$choix = $_POST['TypeAjout'];
	
	include('connexionBDD');
	if($choix == 'Matériel')
	{
		$bdd->exec('INSERT INTO materiel_libre(ID, Modele, Ref, RefDane) VALUES (\' \', \'' . $modele . '\', \'' . $ref . '\',  \'' . $refdane . \')');
	}
	else if($choix == 'Formateur')
	{
		$bdd->exec('INSERT INTO materiel_libre(ID, Nom, Mail) VALUES (\' \', \'' . $nom . '\', \'' . $mail . '\')');
	}
	
	include
	
	$pdo = null;
?>