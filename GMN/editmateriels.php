<?php header("content-type:text/html; charset=UTF-8"); ?>
<?php
    session_start();
    require_once('Includes/BDD.php');
    $Modele = $_POST["modele"];
    $reponse = "";
    include_once("Includes/BDD.php");
    $response = $pdo->query('SELECT Modele,Ref,RefDane,categorie FROM materiel WHERE Modele = "' . $Modele . '"');
    while($donnees = $response->fetch())
    {
        $reponse = $reponse . "Modele: <input type='text' name='modele_modif' value = " . $donnees['Modele'] . " /></br>";
        $_SESSION['Modele'] = $donnees['Modele'];
        $reponse = $reponse . "Reference: <input type='text' name='ref_modif' value = " . $donnees['Ref'] . " /></br>";
        $reponse = $reponse . "Ref. Dane: <input type='text' name='refDane_modif' value = " . $donnees['RefDane'] . " /></br>";
        $reponse = $reponse . "Categorie: <select name='categorie_modif' required />";
    }

    $response2 = $pdo->query('SELECT Nom_Categorie FROM categorie');
    while($donnees2 = $response2->fetch())
    {
        $reponse = $reponse . "<option>".$donnees2['Nom_Categorie']."</option>";
    }

    $reponse = $reponse . "</select>";
    $reponse = $reponse . "<br/><br/><span class='glyphicon glyphicon-alert' style='color: red;' aria-hidden='true'></span><h5 style='color: red;'>Pensez à bien reselectionner la bonne la catégorie pour le matériel</h5><span class='glyphicon glyphicon-alert' style='color: red;' aria-hidden='true'></span>";
    $response->closeCursor();
    $response2->closeCursor();

    if($reponse == "")
    {
        $reponse = $reponse . "<input placeholder='Aucun retour' /></br>";
    }

    echo $reponse;
?>