<?php
session_start();

require_once 'BDD.php';

$_SESSION['login'] = $_POST['login'];
$Password = $_POST['password']; //Mdp entre a la connexion

//Compare le login avec une adresse mail dans la bdd
$sql = 'SELECT Mail,mdp,rang,premiere_connexion FROM formateurs WHERE Mail="' . $_SESSION['login'] . '"';
$result = $pdo->query($sql);

while($donnees = $result->fetch(PDO::FETCH_ASSOC))
{
    $token = true;
    $_SESSION['Pwd'] = $donnees['mdp'];
    $_SESSION['Rang'] = $donnees['rang'];
    $_SESSION['PremiereConnexion'] = $donnees['premiere_connexion'];
}

if($token && $Password == $_SESSION['Pwd'])
{
    if($_SESSION['PremiereConnexion'] == '1')
    {
        header('Location: ../form_first_login.php');
        exit();
    }
    else
    {
        header('Location: ../materiel.php');
        exit();
    }
}
else
{
    $_SESSION['login'] = null;
    header('Location: /Test_PHP/index.php');
    exit();
}