<?php
    session_start();

    $Modele = $_POST["modele_modif"];
    $Ref = $_POST["ref_modif"];
    $RefDane = $_POST["refDane_modif"];
    $Categorie = $_POST["categorie_modif"];

    //$_SESSION['Modele'];  Modele du materiel avant modif
    require_once('BDD.php');

    try
    {
        $pdo->query('UPDATE materiel SET Modele="'.$Modele.'", Ref="'.$Ref.'",RefDane="'.$RefDane.'",categorie="'.$Categorie.'" WHERE Modele="'.$_SESSION['Modele'].'"');

        header('Location: ../materiel.php');
        exit();
    }
    catch(PDOException $e)
    {
        die('Erreur d\'execution: ' . $e->getMessage());
    }

    $pdo=null;
