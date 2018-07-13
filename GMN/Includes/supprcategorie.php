<?php
    try
    {
        $nom_categorie = $_POST["nom_categorie"];
        echo 'suppression du materiel ' . $nom_categorie . '<br/>';

        require_once('BDD.php');
        $pdo->query('DELETE FROM categorie WHERE Nom_Categorie="' . $nom_categorie . '"');
        $pdo = null;
        header('Location: ../materiel.php');
        exit();
    }
    catch(Exception $e)
    {
        echo "Remove information error";
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }

?>
