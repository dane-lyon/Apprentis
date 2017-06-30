<?php
	/*$titre = $_POST['titre'];
	$etablissement = $_POST['etablissement'];
	$RNE = $_POST['RNE'];
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
	
	$req = $bdd->exec('INSERT INTO Tablette VALUES(NULL, '$titre', '$RNE', '$etablissement', NULL, '$probleme', '$resolution', '$commentaire', '$etat')');
	/*$req = "INSERT INTO Tablette";
	
	echo 'La fiche a bien été ajoutée !';
	
	$pdo = null;*/

/* ----------------------------------------------- */

/*	//connection au serveur
  $cnx = mysql_connect( "localhost", "root", "dane69" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "depannage" ) ;
 
  //récupération des valeurs des champs:
  	$titre     = $_POST["titre"] ;
  	$etablissement = $_POST["etablissement"] ;
  	$RNE = $_POST["RNE"] ;
  	$probleme = $_POST["probleme "] ;
  	$probleme = $_POST["resolution"] ;
	$commentaire = $_POST["commentaire"] ;
	$etat = $_POST['etat'] ;
 
  //création de la requête SQL:
  $sql = "INSERT INTO Tablette (titre, etablissement, RNE, probleme, resolution, commentaire, etat)
            VALUES ('$titre', '$etablissement', '$RNE', '$probleme', '$resolution', '$commentaire', '$etat') " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion a échouée") ;
  }*/

		//récupération des valeurs des champs:
  	$titre     = $_POST["titre"] ;
  	$etablissement = $_POST["etablissement"] ;
  	$RNE = $_POST["RNE"] ;
  	$probleme = $_POST["probleme "] ;
  	$probleme = $_POST["resolution"] ;
	$commentaire = $_POST["commentaire"] ;
	$etat = $_POST['etat'] ;

	// Connect to database server
	mysql_connect("localhost", "root", "dane69") or die (mysql_error ());

	// Select database
	mysql_select_db("depannage") or die(mysql_error());

	// The SQL statement is built

	$strSQL = "INSERT INTO Tablette(";

	$strSQL = $titre, ");

	// The SQL statement is executed
	mysql_query($strSQL) or die (mysql_error());

	// Close the database connection
	mysql_close();
?>