<?php
	session_start();
    include_once 'BDD.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../Public/images/favicon.png" />
	<script type="text/javascript" src="../Public/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../Public/bootstrap/js/bootstrap.js"></script>
	<title>Gestion du Matériel Numérique</title>
	<link rel="stylesheet" href="../Public/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="../Public/css/ancienstyle.css" />
	<link rel="stylesheet" href="../Public/css/style.css" />
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
    <?php echo "<center><u><h3>" . $Emprunteur . "</h3></u></center>"; ?>
    <form method="post" action="RetourOK.php">
		<table style="text-align: center;">
			<tr>
				<th>Modèle</th>
				<th>Rendre?<h6>(cocher le materiel à rendre)</h6></th>
			</tr>

		

			<?php
				$reponse = $pdo->query('SELECT * FROM materiel WHERE emprunte="1" AND Emprunteur="' . $EmprunteurBrut . '"');

				while($donnees = $reponse->fetch())
				{
					$Modele = $donnees['Modele'];
					echo '<tr>';
					echo '<td>' . $Modele . '</td>';
					echo '<td><input type="checkbox" name="ID[]" value="' . $Modele . '"/></td>';
					echo '<tr>';
				}
			?>
		</table>
		
		<br/>
		<center><input type="submit" value="Rendre" class="btn btn-success"/></center>
	</form>

	<script type="text/javascript" src="../Public/bootstrap/js/jquery.js" />
	<script type="text/javascript" src="../Public/bootstrap/js/bootstrap.js" />
</body>
</html>



