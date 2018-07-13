<?php header("content-type:text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Public/images/favicon.png" />
		<title>Gestion du Matériel</title>
		<link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="Public/css/ancienstyle.css" />
		<link rel="stylesheet" href="Public/css/style.css" />
	</head>

  <body>
    <div style="background-color: #286090; top: 0px; text-align:center; position: absolute; width: 100%;">
        <header style="color: white; padding-bottom: 10px">
          <h3 style="height: 50%">Gestion du Matériel Numérique</h3>
        </header><img src="Public/images/logo.png" alt="Logo Ac. Lyon" style="position: absolute; top: 3%; right: 30%; width: 57px; height: 61px;" />
      </div>

      <center>
        <div style="margin-top: 20%; width: 20%; background-color: white; padding: 1%; border: 2px solid #286090; border-radius: 25px;">
          <div>
            <p>Changez de mot de passe lors de la premiere connexion</p>
          </div>
          <form method="post" action="Includes/first_login.php" class="form-horizontal">
                <input type="password" class="form-control" name="actuel" placeholder="Actuel" required>

                <input type="password" class="form-control" name="nouveau" placeholder="Nouveau" required>
                <br/>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form> 
        </div>
      </center>

      <div style="background-color: #286090; bottom: 0px; text-align:center; position: absolute; width: 100%; padding-top: 10px;">
        <footer style="color: white;">
          <p>Application Web réalisé par Aurélien GEOFFRAY pour le service de la DANE dans le cadre d'un BTS SIO</p>
        </footer>
      </div>
    </body>
</html>