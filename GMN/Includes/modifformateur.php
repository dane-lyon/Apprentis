<?php
    session_start();

    $Nom = $_POST["nom_modif"];
    $Mail = $_POST["mail_modif"];
    $Mdp = $_POST["mdp_modif"];
    $Rang = $_POST["rang_modif"];

    //$_SESSION["nom"];  Nom du formateur avant modif
    require_once('BDD.php');

    try
    {
        $pdo->query('UPDATE formateurs SET Nom="' . $Nom . '", Mail="' . $Mail . '", mdp="' . $Mdp . '", rang="' . $Rang . '" WHERE Nom="' . $_SESSION["nom"] . '"');

        header('Location: ../materiel.php');
        exit();
    }
    catch(PDOException $e)
    {
        die('Erreur d\'execution: ' . $e->getMessage());
    }

    $pdo=null;
