<?php
session_start();
// Récupére les valeurs rentrer pour l'adresse IP Scribe dans les Textbox est les attribus à des variables $_SESSION.
$_SESSION['TextBox1'] = $_POST['TextBox1'];
$_SESSION['TextBox2'] = $_POST['TextBox2'];
$_SESSION['TextBox3'] = $_POST['TextBox3'];
$_SESSION['TextBox4'] = $_POST['TextBox4'];

// Variable qui renvoie un texte avec l'adresse IP rentrer en entier.
$_SESSION['Adresse_IP_Rentrer'] = $_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.'.
$_SESSION['TextBox4'];

// Fait les calculs pour les collèges de la Loire.
if($_SESSION['TextBox2'] == 20)
{
    $_SESSION['Adresse_Y'] = $_SESSION['TextBox3'] - 1;
    $_SESSION['Acces_AMON'] = 140;
    // Variable qui renvoie l'adresse IP du début de la plage DHCP.
    $_SESSION['IP_PC_Tablettes_Min'] = '172.20.'.$_SESSION['Adresse_Y'].'.1';
    // Variable qui renvoie l'adresse IP de la fin de la plage DHCP.
    $_SESSION['IP_PC_Tablettes_Max'] = '172.20.'.$_SESSION['TextBox3'].'.139';
}
// Fait les calculs pour les collèges de l'Ain et du Rhône.
if($_SESSION['TextBox2'] == 21 or $_SESSION['TextBox2'] == 22 or $_SESSION['TextBox2'] == 23)
{
    $_SESSION['Adresse_Y'] = $_SESSION['TextBox3'] - 1;
    $_SESSION['Acces_AMON'] = 240;
    // Variable qui renvoie l'adresse IP du début de la plage DHCP.
    $_SESSION['IP_PC_Tablettes_Min'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['Adresse_Y'].'.1';
    // Variable qui renvoie l'adresse IP de la fin de la plage DHCP.
    $_SESSION['IP_PC_Tablettes_Max'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.139';
}
// Fait les calculs pour les Lycées
if(16 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 19)
{
    $_SESSION['Adresse_Y'] = $_SESSION['TextBox3'] - 3;
    $_SESSION['Adresse_Y3'] = $_SESSION['TextBox3'] - 2;
    $_SESSION['Acces_AMON'] = 1;
    $_SESSION['Adresse_Y2'] = $_SESSION['TextBox3'] + 1;
    // Variable qui renvoie l'adresse IP du début de la plage DHCP.
    $_SESSION['IP_PC_Tablettes_Min'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['Adresse_Y'].'.1';
    // Variable qui renvoie l'adresse IP de la fin de la plage DHCP.
    $_SESSION['IP_PC_Tablettes_Max'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['Adresse_Y3'].'.249';
    // Variable qui renvoie l'adresse IP du début de la plage IP fixe.
    $_SESSION['IP_Imprimante_Copieur_Min'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.129';
    // Variable qui renvoie l'adresse IP de la fin de la plage IP fixe.
    $_SESSION['IP_Imprimante_Copieur_Max'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.190';
}
// Fait des calculs pour les collèges de la Loire, de l'Ain et du Rhône.
if(20 <= $_SESSION['TextBox2'] and $_SESSION['TextBox2'] <= 23)
{
    // Variable qui renvoie l'adresse IP du début de la plage IP fixe.
    $_SESSION['IP_Imprimante_Copieur_Min'] = '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.150';
    // Variable qui renvoie l'adresse IP de la fin de la plage IP fixe.
    $_SESSION['IP_Imprimante_Copieur_Max'] ='172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.199';
}
?>

<!DOCTYPE html>
<html>
    <body>
        <!-- multistep form -->
        <form id="msform" action="index.php" method="post" >
            <!-- fieldsets -->
            <fieldset>
                <?php
                    if($_SESSION['TextBox2']==20)
                    {
                        echo"<p>L'IP du scribe saisie indique que vous êtes dans un collège de la Loire.</p>";
                    }
                    else if($_SESSION["TextBox2"]==21)
                    {
                        echo"<p>L'IP du scribe saisie indique que vous êtes dans un collège de l'Ain</p>";
                    }
                    else if($_SESSION["TextBox2"]>=22 && $_SESSION["TextBox2"]<=23)
                    {
                        echo"<p>L'IP du scribe saisie indique que vous êtes dans un collège du Rhône ou de la Métropole de Lyon</p>";
                    }
                    else if($_SESSION["TextBox2"]>=16 && $_SESSION["TextBox2"]<=19)
                    {
                        echo"<p>L'IP du scribe saisie indique que vous êtes dans un lycée</p>";
                    }
                    else
                    {
                        echo"<p>Etablissement non reconnu, ré-essayer.</p>";
                    }
                ?>
                <!-- Bouton qui renvoie la page Demande_IP -->
                <a href="index.php?tkn=Demande_IP" style="text-decoration: none;"> <input type="button" name="submit" class="previous action-button" value="NON"/></a>
                <!-- Bouton qui renvoie à la question suivante -->
                <input type="button" name="next" class="next action-button" value="OUI" />
            </fieldset>
            <fieldset>
                <!-- Donne l'adresse IP que l'utilisateur à rentrer dans la page Demande_IP1 -->
                <h4 class="fs-subtitle">Votre adresse IP : <?php echo $_SESSION['Adresse_IP_Rentrer'] ?> </h4>
                <br>
                <!-- Donne à l'utilisateur son accès AMON-->
                <p>
                <?php echo "L'Adresse IP pour se connecter à votre AMON est : <p style=\"color:#FF0000\";> ".$_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.'.$_SESSION['Acces_AMON'].'</p>' ; ?>
                </p>
                <br>
                <!-- Donne à l'utilisateur l'adresse IP de son serveur AMON -->
                <p>
                <?php echo "L'adresse IP de votre serveur AMON est: <p style=\"color:#FF0000\";> ".$_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.252</p>'; ?> 
                </p>
                <br>
                <!-- Donne à l'utilisateur sa page DHCP -->
                <p>
                <?php echo "La plage DHCP est : <p style=\"color:#FF0000\";> ".$_SESSION['IP_PC_Tablettes_Min']."</p> à <p style=\"color:#FF0000\";> ".$_SESSION['IP_PC_Tablettes_Max'].'</p>' ; ?>
                </p>
                <br>
                <!-- Donne à l'utilisateur sa plage de périphérique en IP fixe -->
                <p>
                <?php echo "La plage des périphériques en IP fixe (imprimantes, photocopieurs) est :<p style=\"color:#FF0000\";> ".$_SESSION['IP_Imprimante_Copieur_Min']."</p> à <p style=\"color:#FF0000\";> ".$_SESSION['IP_Imprimante_Copieur_Max'].'</p>'; ?>
                </p>
                <br>
                <!-- Bouton qui renvoie à la question précedente -->
                <input type="button" name="previous" class="previous action-button" value="Précédent" />
                <!-- Bouton qui renvoie à la page Corrige -->
                <input type="submit" name="submit" class="previous action-button" value="Accueil"/>
            </fieldset>
        </form>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
        <!-- jQuery easing plugin -->
        <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- Wizard -->
        <script src="Model/js/wizard.js" type="text/javascript"></script>
    </body>
</html>