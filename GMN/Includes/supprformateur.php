<?php
    try
    {
        $nom_formateur = $_POST["nom_formateur"];

        require_once('BDD.php');
        $pdo->query('DELETE FROM formateurs WHERE Nom="' . $nom_formateur . '"');
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
