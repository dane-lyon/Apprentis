<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Gestion du Matériel</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!-- <script type="text/javascript" src="bootstrap/js/jquery.js" />
		<script type="text/javascript" src="bootstrap/js/bootstrap.js" /> -->
	</head>
	
	<body>
		<div class="bandeau">
			<center>
				<p class="titre">Gestion du Matériel Numérique</p>
			</center>
		</div>
		
		<table border="1" class="table table-responsive tableIndex">
			<tr>
				<th>Formateurs</th>
				<th><?php $datetime = date("d/m");
						echo $datetime;?></th>
				<th><?php $demain =  time() + 86400; // jour + 1 
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 172800; // jour + 2
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 259200; // jour + 3
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 345600; // jour + 4
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 432000; // jour + 5
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 518400; // jour + 6
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 604800; // jour + 7
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 691200; // jour + 8
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 777600; // jour + 9
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 864000; // jour + 10
						echo date('d/m', $demain);?></th>
				<th><?php $demain =  time() + 950400; // jour + 11
						echo date('d/m', $demain);?></th>
			</tr>
			
			<?php
				include('connexionBDD.php');
						$reponse = $bdd->query('SELECT * FROM formateurs ORDER BY `formateurs`.`ID` ASC');
			
					while($donnees = $reponse->fetch())
					{
						$Nom = $donnees['Nom'];
						$Nom = str_replace('_', ' ', $Nom);
						echo '<tr>';
						echo '<td class="JC">' . $Nom . '</td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '<td> </td>';
						echo '</tr>';
					}
			
				$pdo = null;
			?>
			
		</table>
		
		<footer>
			<center>
				<a href="liste.php" ><input type="button" value="Liste du matériel" alt="Liste du matériel" class="btn btn-primary espaceBouton" /></a>
				<a href="emprunt.php" ><input type="button" value="Demande d'emprunt" alt="Demande d'emprunt" class="btn btn-primary espaceBouton" /></a>
				<a href="retour.php" ><input type="button" value="Retour du matériel" alt="Retour du matériel" class="btn btn-primary" /></a>
			</center>
		</footer>
		<br/>
	</body>
</html>