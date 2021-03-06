<?php
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    include("index.php");
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['pseudo'])) {
        echo '<center></br></br><font color="red">Le champ pseudo est vide.</font></center>';
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mot_de_passe'])) {
            echo '<center></br></br><font color="red">Le champ mot de passe est vide.</font></center>';
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $MotDePasse = htmlentities($_POST['mot_de_passe'], ENT_QUOTES, "ISO-8859-1");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "dane69", "depannage");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo '<center></br></br><font color="red">Erreur de connexion à la base de données</font></center>';
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM table_membres WHERE pseudo = '".$Pseudo."' AND mot_de_passe = '".$MotDePasse."'");
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo '<center></br></br><font color="red">Le pseudo ou le mot de passe est incorrect.</font></center>';
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    include("page1.html");
                }
            }
        }
    }
}
?>