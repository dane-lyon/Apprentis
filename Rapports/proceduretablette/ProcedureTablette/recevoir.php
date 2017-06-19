<?php
$bdd = new PDO('mysql:host=localhost;dbname=fiches_procedure;charset=utf8', 'root', '');

$requete = $bdd->query('SELECT * FROM fiches');

while ($data = $requete -> fetch())
{
	echo'<h2>'.$data['titre'].'</h2>';
}

$requete -> closeCursor();

include('infofiche.html')
?>