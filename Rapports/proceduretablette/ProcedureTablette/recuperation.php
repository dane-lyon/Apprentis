
<?php
	/*$RNE = $_POST['RNE'];
	$etablissement = $_POST['etablissement'];
	$probleme = $_POST['probleme'];
	$resolution = $_POST['resolution'];
	$commentaire = $_POST['commentaire'];
	$etat = $_POST['etat'];

	$stmt = $dbh->prepare("INSERT INTO REGISTRY Tablette(titre, RNE, etablissement, probleme, resolution, commentaire, etat) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->bindParam(1, $titre);
	$stmt->bindParam(2, $RNE);
	$stmt->bindParam(3, $etablissement);
	$stmt->bindParam(4, $probleme);
	$stmt->bindParam(5, $resolution);
	$stmt->bindParam(6, $commentaire);
	$stmt->bindParam(7, $etat);

	if($stmt->execute())
	{ 
		echo "Ça marche" 
	}
	else
	{ 
		echo "ça marche pas" 
	}*/

	


	$titre = $_POST['titre'];
	$RNE = $_POST['RNE'];
	$etablissement = $_POST['etablissement'];
	$probleme = $_POST['probleme'];
	$resolution = $_POST['resolution'];
	$commentaire = $_POST['commentaire'];
	$etat = $_POST['etat'];
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=depannage;charset=utf8', 'root', 'dane69',
			array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
			)
		);
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	$req = $bdd->exec('INSERT INTO Tablette(titre, RNE, etablissement, probleme, resolution, commentaire, etat)');
	$req = "INSERT INTO Tablette VALUES('$titre','$RNE','$etablissement','$probleme','$resolution','$commentaire','$etat')";
	
	echo 'La fiche a bien été ajoutée !';
	
	$pdo = null;
	


	/*
	$con=mysqli_connect("127.0.0.1", "root", "");
	mysqli_select_db("depannage".$con);
	$titre = $_POST['titre'];
	$RNE = $_POST['date'];
	$etablissement = $_POST['etablissement'];
	$probleme = $_POST['probleme'];
	$resolution = $_POST['resolution'];
	$commentaire = $_POST['commentaire'];
	$etat = $_POST['etat'];
	$req="insert into tablette values('$titre','$RNE','$etablissement','$probleme','$resolution','$commentaire','$etat')";
	echo($req);
	mysql_query($req);
	mysql_close();*/
?>