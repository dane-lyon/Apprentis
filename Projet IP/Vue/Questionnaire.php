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
// Variable qui renvoie une valeur aléatoire sur un plage de 10 à 255.
$_SESSION['Aleatoire'] = rand (10 , 255)
?>

<!DOCTYPE html>
<html>
	<body>
		<!-- multistep form -->
		<form id="msform" action="index.php?tkn=Corrige" method="post" >
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
				<a href="index.php?tkn=Questionnaire_IP" style="text-decoration: none;"> <input type="button" name="submit" class="previous action-button" value="NON"/></a>
				<!-- Bouton qui renvoie à la question suivante -->
				<input type="button" name="next" class="next action-button" value="OUI" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Question 1</h2>
					<h3 class="fs-subtitle">Quelle doit être l'IP du poste à partir duquel on accède à l'AMON?</h3>
					<!-- Donne l'adresse IP que l'utilisateur à rentrer dans la page Demande_IP1 -->
					<h4 class="fs-subtitle">(IP de votre scribe : <?php echo $_SESSION['Adresse_IP_Rentrer']?>) </h4>
					<br>
					<!-- Cinq boutons radio permettant à l'utilisateur de séléctionner une réponse -->
					<div class="radio">
			  		<label><input type="radio" name="R_Question1" value="Option4" >122.2.104.2</label>
					</div>
					<br>
					<div class="radio">
			  		<label><input type="radio" name="R_Question1" value="Option5" ><?php echo $_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.2'; ?></label>
					</div>
					<br>
					<div class="radio">
			  		<label><input type="radio" name="R_Question1" value="Option3" ><?php echo '172.20.'.$_SESSION['TextBox3'].'.68'; ?></label>
					</div>
					<br>
					<div class="radio">
					<!-- Bonne réponse -->
			  		<label><input type="radio" name="R_Question1" value="Bonne_Reponse_Q1" ><?php echo $_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.'.$_SESSION['Acces_AMON']; ?></label>
					</div>
					<br>
					<div class="radio">
			  		<label><input type="radio" name="R_Question1" value="Option1" >192.168.0.1</label>
					</div>
					<br>
					<!-- Bouton qui renvoie à la question précedente -->
					<input type="button" name="previous" class="previous action-button" value="Précédent" />
					<!-- Bouton qui renvoie à la question suivante -->
					<input type="button" name="next" class="next action-button" value="Suivant" />
				</fieldset>

				<fieldset id="appended">
					<h2 class="fs-title">Question 2</h2>
					<h3 class="fs-subtitle">Quelle est l'IP de votre serveur AMON?</h3>
					<h4 class="fs-subtitle">(IP de votre scribe : <?php echo $_SESSION['Adresse_IP_Rentrer']?>)</h4>
					<br>
					<div class="radio">
					<!-- Cinq boutons radio permettant à l'utilisateur de séléctionner une réponse -->
			  		<label><input type="radio" name="R_Question2" value="Option1" ><?php echo $_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.10'; ?></label>
					</div>
					<br>
					<div class="radio">
			  		<label><input type="radio" name="R_Question2" value="Option2" >172.23.15.152</label>
					</div>
					<br>
					<div class="radio">
					<!-- Bonne réponse -->
			  		<label><input type="radio" name="R_Question2" value="Bonne_Reponse_Q2" ><?php echo $_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.252'; ?></label>
					</div>
					<br>
					<div class="radio">
			  		<label><input type="radio" name="R_Question2" value="Option4" ><?php echo $_SESSION['TextBox1'].'.'.$_SESSION['TextBox2'].'.'.$_SESSION['Adresse_Y'].'.252'; ?></label>
					</div>
					<br>
					<div class="radio">
			  		<label><input type="radio" name="R_Question2" value="Option5" >198.180.10.0</label>
					</div>
					<!-- Bouton qui renvoie à la question précedente -->
					<input type="button" name="previous" class="previous action-button" value="Précédent" />
					<!-- Bouton qui renvoie à la question suivante -->
					<input type="button" name="next" class="next action-button" value="Suivant" />
				</fieldset>

				<fieldset>
					<h2 class="fs-title">Question 3</h2>
					<h3 class="fs-subtitle">Quelles IP un PC ou une tablette peuvent se voir attribuer par le DHCP?(4 réponses attendues)</h3>
					<h4 class="fs-subtitle">(IP de votre scribe : <?php echo $_SESSION['Adresse_IP_Rentrer'] ?>)</h4>
					<br>
					<div class="checkbox">
					<!-- Cinq checkbox qui permet à l'utilisateur de choisirs plusieurs réponses -->
					<!-- Bonne réponse -->
		  			<label><input type="checkbox" name="cb_Question3_1" value='Option1' ><?php  echo '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['Adresse_Y'].'.150'; ?></label>
					</div>
					<br>
					<div class="checkbox">
					<!-- Bonne réponse -->
		  			<label><input type="checkbox" name="cb_Question3_2" value="Option2" ><?php echo '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['Adresse_Y'].'.213'; ?></label>
					</div>
					<br>
					<div class="checkbox">
		  			<label><input type="checkbox" name="cb_Question3_3" value="Option3" ><?php echo '172.20.'.$_SESSION['Adresse_Y'].'.180'; ?></label>
					</div>
					<br>
					<div class="checkbox">
		  			<label><input type="checkbox" name="cb_Question3_4" value="Option4" ><?php echo '172.20.'.$_SESSION['Adresse_Y'].'.250'; ?></label>
					</div>
					<br>
					<div class="checkbox">
					<!-- Bonne réponse -->
		  			<label><input type="checkbox" name="cb_Question3_5" value="Option5" ><?php echo '172.20.'.$_SESSION['TextBox3'].'.70'; ?></label>
					</div>
					<br>
					<!-- Bouton qui renvoie à la question précedente -->
					<input type="button" name="previous" class="previous action-button" value="Précédent" />
					<!-- Bouton qui renvoie à la question suivante -->
					<input type="button" name="next" class="next action-button" value="Suivant" />
				</fieldset>

				<fieldset style='width:auto;margin:auto;'>
					<h2 class="fs-title">Question 4</h2>
					<h3 class="fs-subtitle">Citer une adresse IP avec laquelle il est possible de configurer un photocopieur.</h3>
					<h4 class="fs-subtitle">(IP de votre scribe : <?php echo $_SESSION['Adresse_IP_Rentrer']?>)</h4>
					<br>
					<p>
					<!-- Quatre textbox qui permet à l'utilisateur de rentrer les quatre octet de l'adresse pour répondre a la question -->
					<input name="tbx_Question4_1" type="text" style="width:20%;height:45px;" placeholder='A' >.
					<input name="tbx_Question4_2" type="text" style="width:20%;height:45px;" placeholder='B' >.
					<input name="tbx_Question4_3" type="text" style="width:20%;height:45px;" placeholder='C' >.
					<input name="tbx_Question4_4" type="text" style="width:20%;height:45px;" placeholder='D' >
		  			</p>
					<!-- Bouton qui renvoie à la question précedente -->
					<input type="button" name="previous" class="previous action-button" value="Précédent" />
					<!-- Bouton qui renvoie à la question suivante -->
					<input type="button" name="next" class="next action-button" value="Suivant" />
				</fieldset>

				<fieldset>
					<h2 class="fs-title">Question 5</h2>
					<h3 class="fs-subtitle">Quels appareils peuvent avoir pour adresse IP : <?php echo '172.'.$_SESSION['TextBox2'].'.'.$_SESSION['TextBox3'].'.'.$_SESSION['Aleatoire'] ?></h3>
					<h4 class="fs-subtitle">(IP de votre scribe : <?php echo $_SESSION['Adresse_IP_Rentrer']?>)</h4>
					<div class="checkbox">
					<br>
					<!-- Sept checkbox qui permet à l'utilisateur de choisirs plusieurs réponses -->
					<div class="checkbox">
		  			<label><input type="checkbox" name="cb_Question5_3" value="Option3">Accès à l'AMON</label>
					</div>
					<br>
					<div class="checkbox">
		  			<label><input type="checkbox" name="cb_Question5_4" value="Option4">AMON</label>
					</div>
					<br>
					<div class="checkbox">
		  			<label><input type="checkbox" name="cb_Question5_2" value="Option2">Imprimantes</label>
					</div>
					<br>
					<div class="checkbox">
					<!-- Bonne réponse -->
		  			<label><input type="checkbox" name="cb_Question5_7" value="Option4">PC</label>
					</div>
					<br>
					<div class="checkbox">
					<label><input type="checkbox" name="cb_Question5_1" value="Option1">Photocopieur</label>
					</div>
					<br>
					<div class="checkbox">
		  			<label><input type="checkbox" name="cb_Question5_6" value="Option4">Scribe</label>
					</div>
					<br>
					<div class="checkbox">
					<!-- Bonne réponse -->
		  			<label><input type="checkbox" name="cb_Question5_5" value="Option4">Tablettes</label>
					</div>
					<!-- Bouton qui renvoie à la question précedente -->
					<input type="button" name="previous" class="previous action-button" value="Précédent" />
					<!-- Bouton qui renvoie à la page Corrige -->
					<input type="submit" name="submit" class="previous action-button" value="Envoyer"/>
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
