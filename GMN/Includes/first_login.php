<?php

session_start();

$actuel = $_POST['actuel'];
$nouveau = $_POST['nouveau'];
$login = $_SESSION['login'];

require_once 'BDD.php';

$req1 = 'UPDATE formateurs SET mdp="' . $nouveau . '" WHERE Mail="' . $login . '"';
$pdo->exec($req1);
$req2 = 'UPDATE formateurs SET premiere_connexion="0" WHERE Mail="' . $login . '"';
$pdo->exec($req2);

$pdo = null;

header('Location: ../materiel.php');
exit();