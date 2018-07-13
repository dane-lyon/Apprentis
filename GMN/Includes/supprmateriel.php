<?php
    try
    {
        $modele_materiel = $_POST["modele_materiel"];
        $refDane = $_POST["refDane"];

        require_once 'BDD.php';
        $pdo->query('DELETE FROM materiel WHERE Modele="' . $modele_materiel . '" AND RefDane="' . $refDane .'"');
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