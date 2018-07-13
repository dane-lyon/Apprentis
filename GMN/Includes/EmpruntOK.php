<?php
session_start();

require_once 'BDD.php';

$Emprunteur = $_SESSION["Emprunteur"];
$DateEmprunt = $_SESSION["DateEmprunt"];
$DateRetour = $_SESSION['DateRetour'];


$DateEmprunt = str_replace('/', '-', $DateEmprunt);
$DateEmprunt = date('Y-m-d', strtotime($DateEmprunt));

$DateRetour = str_replace('/', '-', $DateRetour);
$DateRetour = date('Y-m-d', strtotime($DateRetour));

foreach($_SESSION['MaterielEmprunte'] as $Materiel)
{
    
    $req2 = 'UPDATE materiel SET Emprunteur="' . $Emprunteur . '" WHERE Modele="' . $Materiel . '"';
    $pdo->exec($req2);
    echo 'req2';
    $req3 = 'UPDATE materiel SET DateEmprunt="'. $DateEmprunt .'" WHERE Modele="' . $Materiel . '"';
    $pdo->exec($req3);
    echo 'req3';
    $req4 = 'UPDATE materiel SET DateRetour="'. $DateRetour .'" WHERE Modele="' . $Materiel . '"';
    $pdo->exec($req4);
    echo 'req4';
    $req1= 'UPDATE materiel SET emprunte="1" WHERE Modele="' . $Materiel . '"';
    $pdo->exec($req1);
    echo 'req1';
}

    header('Location: ../materiel.php');
    exit();


?>
