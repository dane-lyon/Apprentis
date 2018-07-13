<?php
    require_once 'BDD.php';

    $Categorie = $_POST['inputCategorie'];
    
    $pdo->exec('INSERT INTO categorie SET Nom_Categorie="' . $Categorie . '"');

    $pdo=null;

    header('Location: ../materiel.php');
    exit();
?>