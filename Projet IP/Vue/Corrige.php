<?php
session_start();
// Verifie si la réponse à la question 1 est juste ou non.
if($_POST['R_Question1'] == "Bonne_Reponse_Q1")
{
    $_SESSION['Question1'] = true;
}
else
{
    $_SESSION['Question1'] = false;
}
// Vérifie si la réponse à la question 2 est juste ou non.
if($_POST['R_Question2'] == "Bonne_Reponse_Q2")
{
    $_SESSION['Question2'] = true;
}
else
{
    $_SESSION['Question2'] = false;
}
//Verifie si les réponses à la question 3 sont justes ou non.
if(isset($_POST['cb_Question3_1']) and isset($_POST['cb_Question3_2']) and isset($_POST['cb_Question3_5']) and !isset($_POST['cb_Question3_3']) and !isset($_POST['cb_Question3_4']))
{
    $_SESSION['Question3'] = true;
}
else
{
    $_SESSION['Question3'] = false;
}
// Vérifie si la réponse à la question 4 est juste ou non. 
if(20 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 23)
{
    if($_POST['tbx_Question4_1'] == 172 and $_POST['tbx_Question4_2'] == $_SESSION['TextBox2'] and $_POST['tbx_Question4_3'] == $_SESSION['Adresse_Y'] and 150 <= $_POST['tbx_Question4_4'] and $_POST['tbx_Question4_4'] <= 199)
    {
        $_SESSION['Question4'] = true;
    }
    else
    {
       $_SESSION['Question4'] = false; 
    }
}
else
{
    if($_POST['tbx_Question4_1'] == 172 and $_POST['tbx_Question4_2'] == $_SESSION['TextBox2'] and $_POST['tbx_Question4_3'] == $_SESSION['Adresse_Y'] and 129 <= $_POST['tbx_Question4_4'] and $_POST['tbx_Question4_4'] <= 199)
    {
       $_SESSION['Question4'] = true; 
    }
    else
    {
        $_SESSION['Question4'] = false;
    }
}
// Vérifie si les réponses à la question 5 sont justes ou non.
if(!isset($_POST['cb_Question5_1']) and !isset($_POST['cb_Question5_2']) and !isset($_POST['cb_Question5_3']) and !isset($_POST['cb_Question5_4']) and isset($_POST['cb_Question5_5']) and !isset($_POST['cb_Question5_6']) and isset($_POST['cb_Question5_7']))
{
    $_SESSION['Question5'] = true;
}
else
{
    $_SESSION['Question5'] = false;
}
?>

<!DOCTYPE html>
<html>
<center>
<div class="row" style="background-image: url('Model/Images/blanc.png')">
  <div class="col-md-4">
                    Réponse 1 :
                    <p>Quelle doit être l'IP de poste à partir duquel on accède à l'AMON ?</p>
                    <p>
                    <?php
                    // Donne la réponse à la question 1 et affiche en vert si la réponse donné est correct et en rouge si la réponse donné est incorrect.
                    if ($_SESSION['Question1'] == true)
                    {
                        echo "<p style=\"color:#00FF00\";> L'Adresse IP du poste pour se connecter à l'AMON doit être : ".$_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.'.$_SESSION['Acces_AMON'].'.</p>' ;
                    }
                    else
                    {
                        echo "<p style=\"color:#FF0000\";> L'Adresse IP du poste pour se connecter à l'AMON doit être : ".$_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.'.$_SESSION['Acces_AMON'].'.</p>'; 
                    }
                    // Donne une explication pour trouver son accés AMON pour chaque circonscription.
                    if(16 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 19)
                    {
                      echo "<p> Pour trouver l'adresse IP avec laquelle on accéde à l'AMON, il suffit de changer le dernier octet de l'adresse IP du scribe par 1.</p>"  ;
                    }
                    else if($_SESSION['TextBox2'] == 20)
                    {
                        echo "<p> Pour trouver l'adresse IP avec laquelle on accéde à l'AMON, il suffit de changer le dernier octet de l'adresse IP du scribe par 140.</p>";
                    }
                    else if(21 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 23)
                    {
                        echo "<p> Pour trouver l'adresse IP avec laquelle on accéde à l'AMON, il suffit de changer le dernier octet de l'adresse IP de votre scribe par 240.</p>";
                    }

                    ?>
                    </p>
  </div>
  <div class="col-md-4">
                    Réponse 2 :
                    <p>Quelle est l'IP de votre serveur AMON ?</p>
                    <p>
                    <?php
                    // Donne la réponse à la question 2 et affiche en vert si la réponse donné est correct et en rouge si la réponse donné est incorrect. 
                    if($_SESSION['Question2'] == true)
                    {
                        echo "<p style=\"color:#00FF00\";> L'adresse IP de votre serveur AMON est : ".$_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.252.</p>'; 
                    }
                    else
                    {
                        echo "<p style=\"color:#FF0000\";> L'adresse IP de votre serveur AMON est : ".$_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.252.</p>'; 
                    }
                    // Donne une explication pour trouver l'adresse IP du serveur AMON.
                    echo "<p> Pour trouver l'adresse IP de votre serveur AMON, il suffit de changer le dernier octet de l'adresse IP de votre scribe par 252.</p>";
                    ?>
                    </p>
  </div>
  <div class="col-md-4">
                    Réponse 3 :
                    <p>Quelle IP un PC ou une tablette peuvent se voir attribuer par le DHCP ?</p>
                    <p>
                    <?php
                    // Donne la réponse à la question 3 et affiche en vert si la réponse donné est correct et en rouge si la réponse donné est incorrect.  
                    if($_SESSION['Question3'] == true)
                    {
                    echo "<p style=\"color:#00FF00\";>Les PCs et les tablettes peuvent avoir comme adresse IP : ".$_SESSION['IP_PC_Tablettes_Min']." à ".$_SESSION['IP_PC_Tablettes_Max'].'.</p>' ;
                    }
                    else
                    {
                       echo "<p style=\"color:#FF0000\";>Les PCs et les tablettes peuvent avoir comme adresse IP : ".$_SESSION['IP_PC_Tablettes_Min']." à ".$_SESSION['IP_PC_Tablettes_Max'].'.</p>' ; 
                    }
                    // Donne une explication pour connaitre sa plage DHCP pour chaque circonscription.
                    if(16 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 19)
                    {
                      echo "<p> Vous pouvez trouver votre plage DHCP grâce à votre adresse Scribe :
                      <br><br> Pour le début de la plage, il faut faire -3 au 3eme octet et changer le dernier octet par 10 à 255.
                      <br><br> Pour la fin de la plage, il faut faire -2 à au 3eme octet et changer le dernier octet par 0 à 249.</p>"  ;
                    }
                    else
                    {
                        echo "<p> Vous pouvez trouver votre plage DHCP grâce à votre adresse Scribe :
                      <br> Pour le début de la plage, il faut faire -1 au 3eme octet et changer le dernier octet par 1 à 255.
                      <br> Pour la fin de la plage, il suffit de changer le dernier octet par 0 à 139.</p>";
                    }

                    ?>
                    </p>
  </div>
</div>
</center>
<br>
<center>
<div class="row" style="background-image: url('Model/Images/blanc.png')">
  <div class="col-md-6">
                    Réponse 4:
                    <p>Citer une IP qu'il est possible de prendre pour configurer un photocopieur ?</p>
                    <p>
                    <?php
                    // Donne la réponse à la question 4 et affiche en vert si la réponse donné est correct et en rouge si la réponse donné est incorrect. 
                    if($_SESSION['Question4'] == true)
                    {
                    echo "<p style=\"color:#00FF00\";> Les imprimantes et les copieurs peuvent avoir comme adresse IP : ".$_SESSION['IP_Imprimante_Copieur_Min']." à ".$_SESSION['IP_Imprimante_Copieur_Max'].'.</p>';
                    }
                    else
                    {
                      echo "<p style=\"color:#FF0000\";> Les imprimantes et les copieurs peuvent avoir comme adresse IP : ".$_SESSION['IP_Imprimante_Copieur_Min']." à ".$_SESSION['IP_Imprimante_Copieur_Max'].'.</p>';  
                    }
                    // Donne une explication pour connaitre sa plage d'adresse IP fixe pour chaque circonscription.
                    if(16 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 19)
                    {
                      echo "<p> Vous pouvez trouver votre plage pour les IP fixes grâce à votre adresse Scribe, il suffit de changer le dernier octet par 129 à 190.</p>" ;
                    }
                    else
                    {
                        echo "<p> Vous pouvez trouver votre plage pour les IP fixes grâce à votre adresse Scribe, il suffit de changer le dernier octet par 150 à 199.</p>" ;
                    }
                    ?>
                    </p>
  </div>
  <div class="col-md-6">
                    Réponse 5 :
                    <p>Quels appareils peuvent avoir pour IP : <?php echo '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.55 ?' ?></p>
                    <p>
                    <?php
                    // Donne la réponse à la question 5 et affiche en vert si la réponse donné est correct et en rouge si la réponse donné est incorrect.  
                    if($_SESSION['Question5'] == true)
                    {
                        echo "<p style=\"color:#00FF00\";> Les PC et les tablettes peuvent se voir attribuer cette adresse IP. </p>";
                    }
                    else
                    {
                       echo "<p style=\"color:#FF0000\";> Les PC et les tablettes peuvent se voir attribuer cette adresse IP. </p>"; 
                    }
                    ?>
                    </p>
  </div>
</div>
<form id="msform" action="index.php" method="post">
<input type="submit" name="submit" class="previous action-button" value="Accueil"/>
</form>
</center>

    </body>
</html>