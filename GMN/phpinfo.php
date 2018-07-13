<?php //phpinfo(); ?>

<?php  include_once('Includes/BDD.php');
$mdp = "";
$mdpCrypt = "";
$reponse = $pdo->query('SELECT mdp FROM formateurs WHERE Nom="Aurelien_GEOFFRAY"');
while($donnees = $reponse->fetch())
{
    $mdp = $donnees['mdp'];
}
$mdpCrypt = crypt($mdp);
echo $mdpCrypt;
?>