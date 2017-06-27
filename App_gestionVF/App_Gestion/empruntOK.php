<?php
	session_start();
	if(isset($_POST['ID']) == false){$_POST['ID'] = 0;}
	$_SESSION['RecupCheckbox'] = $_POST['ID'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Gestion du Matériel</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<!-- <script type="text/javascript" src="bootstrap/js/jquery.js" />
		<script type="text/javascript" src="bootstrap/js/bootstrap.js" /> -->
	</head>
	
	<body>		
		<div class="bandeau">
			<center>
				<p class="titre">Gestion du Matériel Numérique</p>
			</center>
		</div>
		<div class="EmpruntOK">
			<?php
				$_SESSION['Nom'] = $_POST['choix'];
				$_SESSION['Nom'] = str_replace('_', ' ', $_SESSION['Nom']);
				echo $_SESSION['Nom'] . ' a emprunté : <br/>';
				if($_SESSION['RecupCheckbox'] != 0)
				{
					echo '<ul>';
					foreach($_SESSION['RecupCheckbox'] as $valeur)
					{
						echo '<li>' . $valeur . '</li>';
					}
					echo '</ul>';
				}
				else
				{
					include('TestPourEmprunt.js');
				}
				
			?>
			<div class="CentreDiv">
				<input type="button" value="OK" class="btn btn-primary" />
			</div>
			
		</div>
	</body>
</html>