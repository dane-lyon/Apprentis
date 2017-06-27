<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Gestion du Matériel</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />

	</head>
	
	<body>
		<div class="menu bouton">
			<ul>
				<li><a href="#">Menu</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="liste.php">Matériel</a></li>
						<li><a href="emprunt.php">Emprunt</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="bandeau"><center><p class="titre">Gestion du Matériel Numérique</p></center></div>
		<br/>
		
		<table border="1" class="table table-responsive tableau_retour">
			<tr>
				<th>Emprunteur</th>
				<th>Matériel Emprunté</th>
			</tr>
			<tr>
				<td>
					<?php
						include('connexionBDD.php');
						
						$reponse = $bdd->query('SELECT * FROM formateurs  ORDER BY `formateurs`.`ID` ASC');
						
						echo '<select size="18" class="Liste_Formateurs_retour select">';
						while ($donnees = $reponse->fetch())
						{
							$Nom = $donnees['Nom'];
							$Nom = str_replace('_', ' ', $Nom);
							echo '<option value=' . $donnees['Nom'] . '>' . $Nom . '</option>';
						}
						echo '</select>';
					?>
				</td>
				<td>
					<?php					
						$reponse = $bdd->query('SELECT * FROM materiel_libre');
					
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
	</body>
</html>