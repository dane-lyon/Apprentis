<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Gestion du Matériel</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		
	</head>
	
	<body>
		<div class="menu bouton">
			<ul>
				<li><a href="#">Menu</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="liste.php">Matériel</a></li>
						<li><a href="emprunt.php">Emprunt</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="bandeau"><center><p class="titre">Gestion du Matériel Numérique</p></center></div>
		<br/>
		
		<form method="post" action="#">
			<label><input type="checkbox" id="materiel" class="target"/>Materiel</label>
		<input type="submit" value="Ajouter"/>
		</form>
		<script language="text/javascript">
			$(".target").change(function()
			{
				$(".materiel").show();
			});
		</script>
		<div class="materiel" style="display: hidden;">
			div materiel
		</div>
		<script src="bootstrap/js/jquery.js"></script>
	</body>
</html>