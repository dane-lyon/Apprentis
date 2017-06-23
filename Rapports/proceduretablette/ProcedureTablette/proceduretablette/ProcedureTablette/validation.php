<?php
mysql_connect("localhost", "root", "dane69");
mysql_select_db("depannage");
$quete = mysql_query("SELECT * FROM table_membres");
while($validation = mysql_fetch_array($quete))
{
echo 'Pseudo: ';
echo $validation['pseudo'];
echo ' Mot de passe: ';
echo $validation['mot_de_passe'];
echo ' E-mail: ';
echo $validation['email'];
echo '<a href="validation.php?action=accepter&id='.$validation['id'].'">Accepter</a>';
echo '<a href="validation.php?action=refuser&id='.$validation['id'].'">Refuser</a>';
echo '<br/>';
}
 
if(isset($_GET['action']) AND isset($_GET['id']))
{
$action = $_GET['action'];
if($action == "accepter")
{
$id = $_GET['id'];
$quete2 = mysql_query("SELECT * FROM membre_tables WHERE id='$id'");
$connexion = mysql_fetch_array($quete2);
$pseudo = $connexion['pseudo'];
$mot_de_passe = $connexion['mot_de_passe'];
$email = $connexion['email'];
mysql_query("INSERT INTO connexion VALUES('$id', '$pseudo', 'mot_de_passe', '$email')");
mysql_query("DELETE FROM validation WHERE id='$id'");
}
elseif($action == "refuser")
{
$id = $_GET['id'];
mysql_query("DELETE FROM table_membres WHERE id='$id'");
}
}
?>
