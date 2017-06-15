<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		 	<img src="logo.png" class="logo">
		
		<center>			
			<?php
			if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
			{
				echo '<h1>Inscription</h1>';
				echo '<form method="post" action="register.php" enctype="multipart/form-data">
				<fieldset><legend>Identifiants</legend>
				<label for="pseudo">* Pseudo (le pseudo doit contenir entre 3 et 15 caractères) :</label>  <input name="pseudo" type="text" id="pseudo" /><br /><br />
				<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br /><br />
				<label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" /><br />
				</fieldset>
				<fieldset><legend>Contacts</legend>
				<label for="email">* Votre adresse Mail :</label><input type="text" name="email" id="email" /><br />
				</fieldset>
				<p><input type="submit" value="S\'inscrire" /></p></form>';
				
			} //Fin de la partie formulaire
			
			else //On est dans le cas traitement
			{
				$pseudo_erreur1 = NULL;
				$pseudo_erreur2 = NULL;
				$mdp_erreur = NULL;
			}
			?>
			
			<?php
			//On récupère les variables
			$i = 0;
			$temps = time(); 
			$pseudo=$_POST['pseudo'];
			$email = $_POST['email'];
			$pass = md5($_POST['password']);
			$confirm = md5($_POST['confirm']);
		
			//Vérification du pseudo
			$query=$db->prepare('SELECT COUNT(*) AS nbr FROM forum_membres WHERE membre_pseudo =:pseudo');
			$query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
			$query->execute();
			$pseudo_free=($query->fetchColumn()==0)?1:0;
			$query->CloseCursor();
			if(!$pseudo_free)
			{
				$pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
				$i++;
			}
		
			if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
			{
				$pseudo_erreur2 = "Votre pseudo est soit trop grand, soit trop petit";
				$i++;
			}
		
			//Vérification du mdp
			if ($pass != $confirm || empty($confirm) || empty($pass))
			{
				$mdp_erreur = "Votre mot de passe et votre confirmation diffèrent, ou sont vides";
				$i++;
			}
			?>
			
			<?php
				if ($i==0)
				{
					echo'<h1>Inscription terminée</h1>';
						echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit</p>
					<p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d accueil</p>';
						$query=$db->prepare('INSERT INTO forum_membres (membre_pseudo, membre_mdp, membre_email)
						VALUES (:pseudo, :pass, :email)');
					$query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
					$query->bindValue(':pass', $pass, PDO::PARAM_INT);
					$query->bindValue(':email', $email, PDO::PARAM_STR);				
					$query->execute();
				
					//Et on définit les variables de sessions
						$_SESSION['pseudo'] = $pseudo;
						$_SESSION['id'] = $db->lastInsertId();
						$query->CloseCursor();
					}
			?>
		</center>
        </form>
		
 </body>

</html>