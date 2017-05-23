	<!-- Récupère le head et le style pour toutes les pages-->
<?php
include('Controler/header_page.php');
?>

<html>
    <body>
    	<!-- Place le bandeau, le titre et les boutons "accueil" et "Documentation" en haut des pages-->
	    <p class="titre">
	    	<!-- Bouton qui permet d'accéder à l'accueil pour toutes les pages -->
	    	<a href="index.php">
	    		Accueil
	    	</a>
	    	<!--Permet la séparation entre le bouton accueil et le titre -->
	    	<img src="Model/Images/barre.png"/>
	    	<!-- Titre du site (s'affiche sur le bandeau) -->
	    		PLAN D'ADRESSAGE D'IP
	    	<!--Permet la séparation entre le titre et le bouton pour acceder à la documentation -->
	    	<img src="Model/Images/barre.png"/>
	    	<!-- Bouton permettant l'accès à la documentation du plan d'adressage IP -->
	    	<a href="http://nefertiti.crdp.ac-lyon.fr/wk/cdch/nouveau_plan_d_adressage" class="bouton" TARGET="_BLANK">
	    	Documentation
	    	</a>
	    </p>
	    <!-- Place le logo de la DANE, les  mentions légal et les crédits en bas de toutes les pages -->
	    	<div>
		<div class="Dane">
			<!-- Logo DANE + lien site DANE -->
			<a href="https://dane.ac-lyon.fr/spip/" target="_BLANK">
				<img src="Model/Images/Dane.png" style="width: 50%">
			</a>
		</div>
	</div>
</html>
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="bassite">
					<!-- Logo mention CC + lien mention CC -->
					<a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/3.0/fr/" target="_BLANK">
					<img src="Model/Images/CC.png"></a>
				</div>
				<div class="copyright">
					<!-- Acces Bootstrap -->
					CSS : <a target="_blank" href="http://getbootstrap.com/"><b>Bootstrap 3.3.7</b></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<!-- Credits -->
				<div class="design">v 1.0 |  Par <i>Cyprien Falavel</i> & <i>Pierrick Blondeau</i>

				</div>
			</div>
		</div>
	</div>
</div>
    </body>
</html>

<!-- Permet le passage d'une page à l'autre grâce au "tkn" -->
<?php
if(isset($_GET["tkn"])&&!empty($_GET["tkn"]))
{
	// Permet l'affichage de la demande d'adresse IP pour le questionnaire
	if($_GET["tkn"]=="Questionnaire_IP")
	{
		include('Vue/Demande_IP1.php');
	}
	// Permet l'affichage du questionnaire
	else if($_GET["tkn"]=="Questionnaire")
	{
		include('Vue/Questionnaire.php');
	}
	// Permet l'affichage du corrigé
	else if($_GET["tkn"]=="Corrige")
	{
		include('Vue/Corrige.php');
	}
	// Permet l'affichage de la demande d'adresse IP pour les réponses
	else if($_GET["tkn"]=="Demande_IP")
	{
		include('Vue/Demande_IP2.php');
	}
	// Permet l'affichage des réponses
	else if($_GET["tkn"]=="Reponse_Demande")
	{
		include('Vue/Reponse_Demande.php');
	}
}
// Permet l'affichage de l'accueil
else
{
	include('Vue/Accueil.php');
}
?>