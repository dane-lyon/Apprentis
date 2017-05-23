<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Liste des fiches de procédures</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		 	<img src="logo.png" class="logo">
        <?php
		try		//Connection a la bdd
		{
			$bdd = new PDO('mysql:host=localhost;dbname=Depannage;charset=utf8', 'root', 'dane6904!');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		$reponse = $bdd->query('SELECT * FROM Tablette');
		
        echo '<center><div class="liste"><table>';
                	echo '<tr>';
						echo '<th class="thliste">N°</th>';
                   		echo '<th class="thliste">Titre</th>';
                   		echo '<th class="thliste">Etablissement</th>';
						echo '<th class="thliste">RNE</th>';
						echo '<th class="thliste">Type de matériel</th>';
                    	echo '<th class="thliste">Etat</th>';
                	echo '</tr>';
			
            while($donnees = $reponse->fetch())	// Renvoit les valeurs de la bdd
            {
				echo '<tr>';
                    echo '<td class="tdliste">' . $donnees['id'] . '</td>';
				    echo '<td class="tdliste">' . $donnees['titre'] . '</td>';
					echo '<td class="tdliste">' . $donnees['etablissement'] . '</td>';
					echo '<td class="tdliste">' . $donnees['RNE'] . '</td>';
					echo '<td class="tdliste">' . $donnees['Type de matériel'] . '</td>';
					echo '<td class="tdliste">' . $donnees['etat'] . '</td>';
				echo '</tr>';
            }
		echo '</table></div></center>';
            $pdo = null;
        ?>
		
		<div class="bouton">
  					<p>
   						<a href="page1.html">Retour</a>
 					</p>
			</div>
  					<p>
						
		<form action="ouverturefiche.php" method="post">
			Numéro de fiche :<input type="text" name="id" id="id" size="1px" />
		</form>
    </body>
</html>