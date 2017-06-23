<?php
if(!empty($_POST['pseudo']))
{
// D'abord, je me connecte à la base de données.
mysql_connect("localhost", "root", "dane69");
mysql_select_db("depannage");

// Je mets aussi certaines sécurités ici…
$mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
$mot_de_passe2 = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe2']));
if($mot_de_passe == $mot_de_passe2)
{
$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
$mot_de_passe = sha1($mot_de_passe);
mysql_query("INSERT INTO table_membres VALUES('', '$pseudo', '$mot_de_passe', '$email')");
	include("inscription.php");
	echo'Utilisateur enregistré';
}
 
else
{
echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
}
}
?>
