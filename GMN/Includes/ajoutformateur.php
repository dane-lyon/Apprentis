<?php
    require_once 'BDD.php';

    $Nom = $_POST['inputNom'];
    $Mail = $_POST['inputMail'];
    $Rang = $_POST['inputRang'];
    
    $pdo->exec('INSERT INTO formateurs SET Nom="' . $Nom . '", Mail="' . $Mail . '", mdp="' . $Mail . '", rang="' . $Rang . '"');

    $pdo=null;

    header('Location: ../materiel.php');
    exit();
?>