<?php
session_start();

if($_POST['ID'] != null)
{
	$_SESSION['MaterielEmprunte'] = $_POST['ID'];
	$_SESSION['Emprunteur'] = $_POST['Emprunteur'];
	$_SESSION['DateEmprunt'] = $_POST['dateEmprunt'];
	$_SESSION['DateRetour'] = $_POST['dateRetour'];
}
else
{
	header('Location: ../accueil.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="../Public/images/favicon.png" />
		<title>Gestion du Matériel Numérique</title>
		<link rel="stylesheet" href="../Public/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../Public/css/ancienstyle.css" />
		<link rel="stylesheet" href="../Public/css/style.css" />
		<!-- <script type="text/javascript" src="bootstrap/js/jquery.js" />
		<script type="text/javascript" src="bootstrap/js/bootstrap.js" /> -->
	</head>
	
	<body>
	<?php
		if($_SESSION['Rang'] == 'user')
		{
			echo '<nav class="navbar navbar-default" style="background-color: rgb(0,124,155);">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="accueil.php" style="color: white; font-weight: bold; font-size: 20px">GMN</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="../materiel.php" style="color: black;">Matériel</a></li>
							<li><a href="../emprunt.php" style="color: black;">Emprunt</a></li>
							<li><a href="../retour.php" style="color: black;">Retour</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="Includes/logout.php" style="color: black"><span class="glyphicon glyphicon-log-out">Déconnexion</span></a></li>
						</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>';
		}
		else if($_SESSION['Rang'] == 'admin')
		{
			echo '<nav class="navbar navbar-default" style="background-color: rgb(0,124,155);">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="accueil.php" style="color: white; font-weight: bold; font-size: 20px">GMN</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="../materiel.php" style="color: black;">Matériel</a></li>
							<li><a href="../emprunt.php" style="color: black;">Emprunt</a></li>
							<li><a href="../retour.php" style="color: black;">Retour</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;">Modif. Base Données<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="../ajout.php" style="color: black;">Ajout</a></li>
								<li><a href="../SupprCategorie.php" style="color: black;">Suppr. Categorie</a></li>
								<li><a href="../SupprMateriel.php" style="color: black;">Suppr. Matériel</a></li>
								<li><a href="../SupprFormateur.php" style="color: black;">Suppr. Formateur</a></li>
							</ul>
							</li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="Includes/logout.php" style="color: black"><span class="glyphicon glyphicon-log-out">Déconnexion</span></a></li>
						</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>';
		}

		$EmprunteurBrut = $_POST["Emprunteur"];
		$Emprunteur = str_replace('_', ' ', $EmprunteurBrut);
    ?>

        <center style="margin-top: 3%;">
            Emprunteur:  <?php $Emprunteur = str_replace('_', ' ', $_SESSION['Emprunteur']); echo $Emprunteur; ?><br/><br/>
            Matériel emprunté:<br/>
				<table>
					<?php foreach($_SESSION['MaterielEmprunte'] as $Materiel)
						  {
							  echo '<tr>'; 
							  echo '<td>' . $Materiel . '</td>';
							  echo '</tr>';
						  } 
					?>
				</table>

			<br/>  <?php echo 'Du ' . $_SESSION['DateEmprunt'] . ' au ' . $_SESSION['DateRetour'] ;?>
            
            <br/><br/>
            <a href="EmpruntOK.php"><input type="button" class="btn btn-success" value="Valider l'emprunt" /></a>
			<a href="../materiel.php"><input type="button" class="btn btn-danger" value="Annuler l'emprunt" /></a>
			
        </center>
    </body>
</html>