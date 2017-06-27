<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Demande D'Emprunt - [Gestion du Matériel]</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<script type="text/javascript" href="bootstrap/js/bootstrap.js" ></script>
		<script type="text/javascript" href="bootstrap/js/jquery.js" ></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		<!-- Datepicker -->
		<link rel="stylesheet" href="datepicker/css/datepicker.css"/>
		<script type="text/javascript" href="bootstrap-datepicker.js"></script>
	</head>
	
	<body>
		<div class="menu bouton">
			<ul>
				<li><a href="#">Menu</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="liste.php">Matériel</a></li>
						<li><a href="retour.php">Retour</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="bandeau">
			<center>
				<p class="titre">Gestion du Matériel Numérique </p>
			</center>
		</div>
		
		<?php
			include('connexionBDD.php');
			
			$reponse = $bdd->query('SELECT * FROM formateurs  ORDER BY `formateurs`.`ID` ASC');
		?>	
		
		<form action="empruntOK.php" method="post" id="formulaireEmprunt">
			<div class="Formateurs">
				<?php
					echo '<select size="18" name="choix" class="Liste_Formateurs border select" required>';
					while($donnees = $reponse->fetch())
					{
						$Nom = $donnees['Nom'];
						$Nom = str_replace('_', ' ', $Nom);
						echo '<option value=' . $donnees['Nom'] . '>' . $Nom . '</option>';
					}
					echo '</select>';
				?>
			</div>
			
			<div class="Materiel">
				<?php
					$reponse = $bdd->query('SELECT * FROM `materiel_libre` WHERE `ID`<13');
					
					echo '<div>';
					while ($donnees = $reponse->fetch())
					{
					echo '<label><input type="checkbox" name="ID[]" value="' . $donnees['Modele'] . '" id="' . $donnees['ID'] . '"/>' . '  ' . $donnees['Modele'] . '</label><br/>' ;
					}
					echo '</div>';
					
					$reponse = $bdd->query('SELECT * FROM `materiel_libre` WHERE `ID`>12 AND `ID`<25');
					
					echo '<div>';
					while ($donnees = $reponse->fetch())
					{
					echo '<label><input type=checkbox name="ID[]" value="' . $donnees['Modele'] . '" id="' . $donnees['ID'] . '"/>' . '  ' . $donnees['Modele'] . '</label><br/>' ;
					}
					echo '</div>';
					$pdo = null;
				?>
			</div>
			
			<label class="date">Date d'Emprunt: <br/>
				<input type="" id="emprunt" class="Selec_Date" placeholder="Ex: 12/04/2017" required />
			</label>
			
			<label class="date">Date de Retour: <br/>
				<input type="" id="retour" class="Selec_Date" placeholder="Ex: 12/04/2017" onclick="$('.datepicker').datepicker()" required />
				<script>
  					
  				</script>
			</label>		
			
			<div class="BtnEmprunter">
				<input type="reset" value="Annuler la selection" class="btn btn-primary espace" />
				<input type="submit" value="Emprunter" class="btn btn-primary"/>
			</div>
		</form>
		
		<script type="text/javascript" href="bootstrap/js/bootstrap.js" ></script>
		<script type="text/javascript" href="bootstrap/js/jquery.js" ></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script type="text/javascript" src="jquery-ui.js"></script>
		<script type="text/javascript" src="datepicker.js"></script>
	</body>
</html>