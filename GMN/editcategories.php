<?php header("content-type:text/html; charset=UTF-8"); ?>
<?php
    session_start();
    $Nom_Categorie = $_POST["nom_categorie"];
    $reponse = "";
    include_once("Includes/BDD.php");
    $response = $pdo->query('SELECT ID,Nom_Categorie FROM categorie WHERE Nom_Categorie = "' . $Nom_Categorie . '"');
    while($donnees = $response->fetch())
    {
        $reponse = $reponse . "Nom: <input type='text' name='nom_modif' value = " . $donnees['Nom_Categorie'] . " /></br>";
        $_SESSION["nom_categorie"] = $donnees['Nom_Categorie'];
    }

    $response->closeCursor();

    if($reponse == "")
    {
        $reponse = $reponse . "<input placeholder='Aucun retour' /></br>";
    }
    echo $reponse;
?>