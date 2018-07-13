<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=appgestion;charset=utf8','root','dane6904!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
catch(PDOException $e)
{
    die('Erreur à la connexion: ' . $e->getMessage());
}

?>
