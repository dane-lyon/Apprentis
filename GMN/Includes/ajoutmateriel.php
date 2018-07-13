<?php
    require_once 'BDD.php';

    $Modele = $_POST['inputModele'];
    $Ref = $_POST['inputRef'];
    $RefDane = $_POST['inputRefDane'];
    $Categorie = $_POST['inputCategorie'];

    $pdo->exec('INSERT INTO materiel SET Modele="' . $Modele . '", Ref="' . $Ref . '", RefDane="' . $RefDane .'", categorie="' . $Categorie . '"');

    header('Location: ../materiel.php');
    exit();
?>