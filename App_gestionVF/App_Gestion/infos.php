<?php
	session_start();
	$SESSION['materiel'] = $_POST['materiel'];
?>
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
		<table border="1">
			<tr>
				<th>Emprunteur</th>
				<th>Date d'emprunt</th>
				<th>Date de retour</th>
			</tr>
			<tr>
				<?php
					include('connexionBDD');
				
					$reponse = $bdd->query('SELECT ' . $SESSION['materiel'] . 'FROM materiel_pris');
					
					while($donnees = $reponse->fetch())
					{
						echo "<td>" . $donnees['Emprunteur'] . "</td>";
						echo "<td>" . $donnees['DateEmprunt'] . "</td>";
						echo "<td>" . $donnees['DateRetour'] . "</td>";	
					}
				
					$pdo = null;
				?>
			</tr>
		</table>
	</body>
</html>