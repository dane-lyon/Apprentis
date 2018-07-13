<?php header("content-type:text/html; charset=UTF-8"); ?>
<?php
    session_start();
    $Nom_formateur = $_POST["nom_formateur"];
    $reponse = "";
    include_once("Includes/BDD.php");
    $response = $pdo->query('SELECT ID,Nom,Mail,mdp,rang FROM formateurs WHERE Nom = "' . $Nom_formateur . '"');
    while($donnees = $response->fetch())
    {
        $reponse = $reponse . "Nom: <input type='text' name='nom_modif' value = " . $donnees['Nom'] . " /></br>";
        $reponse = $reponse . "Mail: <input type='text' name='mail_modif' value = " . $donnees['Mail'] . " /></br>";
        $reponse = $reponse . "Mdp: <input type='text' name='mdp_modif' value = " . $donnees['mdp'] . " /></br>";
        $reponse = $reponse . "Rang: <input type='text' name='rang_modif' value = " . $donnees['rang'] . " /></br>";
    }

    $response->closeCursor();

    if($reponse == "")
    {
        $reponse = $reponse . "<input placeholder='Aucun retour' /></br>";
        $reponse = $reponse . "<input placeholder='Aucun retour' /></br>";
        $reponse = $reponse . "<input placeholder='Aucun retour' /></br>";
        $reponse = $reponse . "<input placeholder='Aucun retour' /></br>";
    }
    echo $reponse;
?>