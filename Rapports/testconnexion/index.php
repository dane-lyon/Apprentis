<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		 	<img src="logo.png" class="logo">
		
		<center>
			<?php
			session_start();
			$titre="Connexion";
			/*include("includes/identifiants.php");
			include("includes/debut.php");
			include("includes/menu.php");*/
			?>
			
			<?php
			if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
			{
				echo '<form method="post" action="connexion.php">
				<fieldset>
				<legend>Connexion</legend>
				<p>
				<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
				<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
				</p>
				</fieldset>
				<p><input type="submit" value="Connexion" /></p></form>
				<a href="./register.php">Pas encore inscrit ?</a>
				
				</div>
				</body>
				</html>';
			}
			else
			{
				$message='';
				if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
				{
					$message = '<p>une erreur s\'est produite pendant votre identification.
				Vous devez remplir tous les champs</p>
				<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
				}
				else //On verif le mot de passe
				{
					$query=$db->prepare('SELECT membre_mdp, membre_id, membre_rang, membre_pseudo
					FROM dane_membres WHERE membre_pseudo = :pseudo');
					$query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
					$query->execute();
					$data=$query->fetch();
				if ($data['membre_mdp'] == md5($_POST['password'])) // Acces OK !
				{
					$_SESSION['pseudo'] = $data['membre_pseudo'];
					$_SESSION['level'] = $data['membre_rang'];
					$_SESSION['id'] = $data['membre_id'];
					$message = '<p>Bienvenue '.$data['membre_pseudo'].', 
						vous êtes maintenant connecté!</p>
						<p>Cliquez <a href="./index.php">ici</a> 
						pour revenir à la page d accueil</p>';  
				}
				else // Acces pas OK !
				{
					$message = '<p>Une erreur s\'est produite 
					pendant votre identification.<br /> Le mot de passe ou le pseudo 
						entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
					pour revenir à la page précédente
					<br /><br />Cliquez <a href="./index.php">ici</a> 
					pour revenir à la page d accueil</p>';
				}
				$query->CloseCursor();
				}
				echo $message.'</div></body></html>';
			
			}
			?>



		</center>
        </form>
		
 </body>

</html>