<?php
session_start();
require_once 'BDD.php';

$Materiel = $_POST['ID'];

foreach($Materiel as $MaterielARendre)
{
    $req1 = 'UPDATE materiel SET emprunte="0" WHERE Modele="' . $MaterielARendre . '"';
    $pdo->exec($req1);
    $req2 = 'UPDATE materiel SET Emprunteur=NULL WHERE Modele="' . $MaterielARendre . '"';
    $pdo->exec($req2);
    $req3 = 'UPDATE materiel SET DateEmprunt=NULL WHERE Modele="' . $MaterielARendre . '"';
    $pdo->exec($req3);
    $req4 = 'UPDATE materiel SET DateRetour=NULL WHERE Modele="' . $MaterielARendre . '"';
    $pdo->exec($req4);
}

header('Location: ../materiel.php');
exit();

?>