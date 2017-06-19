<?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "dane69") // Si le mot de passe est bon
    {
		include('page1.html');
  		exit();
    }

    else // Sinon, on affiche un message d'erreur

    {

        echo '
		<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<center>
		 	<img src="logo.png"> <br><br><br>
		</center>
		
		<center>
        <p>Entrez le mot de passe pour avoir accès aux fiches:</p>
        <form action="verifmdp.php" method="post">

            <p>

            <input type="password" name="mot_de_passe" />

            <input type="submit" value="Valider" />

            </p>
			
			<p><strong>Mot de passe incorrect</strong></p>
		</center>
        </form>
		
 </body>

</html>
		';

    }

    ?>