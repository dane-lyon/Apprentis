<?php
try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=Depannage;charset=utf8', 'root', 'dane6904!');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

$id=$_POST["id"];
$titre=$_POST["titre"];
$etablissement=$_POST['etablissement'];
$RNE=$_POST["RNE"];
$date=$_POST['date'];
$probleme=$_POST['probleme'];
$resolution=$_POST['resolution'];
$commentaire=$_POST['commentaire'];
$etat=$_POST['etat'];s

$stmt = $dbh->prepare("INSERT INTO Tablette (titre, etablissement, probleme, resolution, commentaire, etat) VALUES ($titre, $etablissement, $probleme, $resolution, $etat)");

$stmt->execute();
?>