<?php
    session_start();

    $Nom_Categorie = $_POST["nom_modif"];

    //$_SESSION["nom_categorie"];  Nom de categorie avant modif
    require_once('BDD.php');

    try
    {
        $pdo->query('UPDATE categorie SET Nom_Categorie="' . $Nom_Categorie . '" WHERE Nom_Categorie="' . $_SESSION["nom_categorie"] . '"');

        header('Location: ../materiel.php');
        exit();
    }
    catch(PDOException $e)
    {
        die('Erreur d\'execution: ' . $e->getMessage());
    }

    $pdo=null;
