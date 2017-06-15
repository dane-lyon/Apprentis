<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Liste du Matériel - [Gestion du Matériel]</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<script type="text/javascript" href="bootstrap/js/bootstrap.js" ></script>
		<script type="text/javascript" href="bootstrap/js/jquery.js" ></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	
	<body>
		<div class="menu bouton">
			<ul>
				<li><a href="#">Menu</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="emprunt.php">Emprunt</a></li>
						<li><a href="retour.php">Retour</a></li>
						<li><a href="ajout.php">Ajout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="bandeau">
			<center>
				<p class="titre">Gestion du Matériel Numérique </p>
			</center>
		</div>
		
		<form methode="post" action="infos.php">
			<div class="gauche">
				<table border="1" class="table table-responsive">
					<tr>
						<th style="text-align: center">Matériel Disponible</th>
					</tr>
					<tr>
						<td>
							<?php
								include('connexionBDD.php');
					
								$reponse = $bdd->query('SELECT * FROM materiel_libre');
					
								echo '<select size="24" name="materiel" class="select">';
								while ($donnees = $reponse->fetch())
								{
									echo '<option>' . $donnees['Modele'] . '</option>' ;
								}
								echo '</select>';
					
								$pdo = null;
							?>
						</td>
					</tr>
				</table>
			</div>
		
			
		<div class="droite" class="border">
			<table border="1" class="table table-responsive">
				<tr>
					<th style="text-align: center">Matériel Emprunté</th>
				</tr>
				<tr>
					<td>
						<?php
							include('connexionBDD.php');
							
							$reponse = $bdd->query('SELECT * FROM materiel_pris');
							
							echo '<select size="24" class="select">';
							while ($donnees = $reponse->fetch())
							{
								echo '<option>' . $donnees['Modele'] . '</option>' ;
							}
							echo '</select>';
							
							$pdo = null;
						?>
					</td>
				</tr>
			</table>			
		</div>
		</form>
		<div class="infossupp">
			<a href="javascript:ouvre_popup('infos.php')"><input type="submit" class="btn btn-primary" value="Infos Supp." /></a>
			<script language="javascript">
   			function ouvre_popup(page) {
     			  window.open(page,"Infos Complémentaires","menubar=no, status=no, scrollbars=no, menubar=no, width=500, height=100");
   			}
			</script>
		</div>
		
	</body>
</html>