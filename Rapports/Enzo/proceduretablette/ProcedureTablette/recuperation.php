
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
		$bdd = new PDO('mysql:host=localhost;dbname=depannage;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	$req = $bdd->exec('INSERT INTO tablette(titre, RNE, etablissement, probleme, resolution, commentaire, etat)');
	$req = "INSERT INTO tablette VALUES('$titre','$RNE','$etablissement','$probleme','$resolution','$commentaire','$etat')";
	
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