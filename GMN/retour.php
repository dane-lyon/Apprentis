<?php header("content-type:text/html; charset=UTF-8"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Public/images/favicon.png" />
		<title>Gestion du Matériel Numérique</title>
        <script type="text/javascript" src="Public/bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="Public/bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="Public/css/ancienstyle.css" />
		<link rel="stylesheet" href="Public/css/style.css" />
	</head>
	
	<body>
        <?php
            require_once 'Includes/BDD.php';
            
            if($_SESSION['Rang'] == 'user')
			{
				include 'Includes/navbar.php';
			}
			else if($_SESSION['Rang'] == 'admin')
			{
				include 'Includes/navbar_admin.php';
            }
        ?>
        <div class="RetourMatos">
            <form method="post" action="Includes/VerifRetour.php">
                <?php
                    $reponse = $pdo->query('SELECT Nom FROM formateurs ORDER BY formateurs.Nom ASC');

                    echo '<select name="Emprunteur" required>';
                    echo '<option>Sélectionner un formateur</option>';
                
                    while($donnees = $reponse->fetch())
                    {
                    
                        $Nom = $donnees['Nom'];
                        $Nom = str_replace('_', ' ', $Nom);
                        echo '<option value=' . $donnees['Nom'] . '>' . $Nom . '</option>'; 
                    }
                    echo '</select>';
                ?>
                <input type="submit" value="Confirmer" class="btn btn-primary"/>
            </form>
            <?php $pdo = null; ?>
        </div>
	</body>
</html>